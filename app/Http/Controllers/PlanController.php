<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Activity_Plan;
use App\Models\Category;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PlanController extends Controller
{
    public function show($plan_id, $name)
    {
        $selected_plan = Plan::query()->find($plan_id);
        $activities_entries = $selected_plan->activities;
        $activity_plan = Activity_Plan::where('plan_id', $plan_id)->get();
        $activities = [];
        for ($i = 0; $i <= $activities_entries->count()-1; $i++) {
            array_push($activities,
                [
                    $selected_plan->activities[$i]->name,
                    $activity_plan[$i]->duration
                ]);
        }
        return view('plan', compact('selected_plan', 'activities'));
    }

    public function index($plan_id)
    {
        $plan = Plan::query()->find($plan_id);

        return redirect(route('plan.show', ['plan_id' => $plan->id, 'name' => $plan->getSlug()]));
    }

    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'show',
        ]]);
    }

    public function create()
    {
        return view('create')
            ->with('categories', Category::orderBy('name')->get())
            ->with('activities', Activity::orderBy('name')->get());

    }

    public function store(Request $request)
    {
        $request->validate([
            'planName' => 'bail|required',
            'category' => 'bail|required|integer',
        ]);

        $plan = new Plan();
        $plan->user_id = auth()->user()->id;
        $plan->name = $request->input('planName');
        $plan->category_id = $request->input('category');
        $plan->save();

        for($i = 0; $i < 5; $i++){
            if(!$request->duration[$i] > 0){
                continue;
            }
            if(!isset($request->activity[$i])){
                continue;
            }
            $activity_plan = new Activity_Plan();
            $activity_plan -> plan_id = $plan-> id;
            $activity_plan -> activity_id = $request->activity[$i];
            $activity_plan -> duration = $request->duration[$i];
            $activity_plan ->save();
        }

        return Redirect::route('plan.index', $plan->id);

    }

    public function delete($plan_id)
    {
        $plan = Plan::query()->find($plan_id);

        if ($plan->user->id !== Auth::user()->id) {
            return redirect('/browse')
                ->with('danger-message', 'plan.cannot_delete');
        }

        $plan->delete();
        return redirect('/browse')
            ->with('success-message', 'plan.delete_success');

    }

    public function favourite($plan_id)
    {
        $plan = Plan::query()->find($plan_id);
        $user_id = Auth::user()->id;

        if ($plan->usersWhoFavourited->contains('id', $user_id)) {
            return redirect()->back()
                ->with('success-message', 'plan.cannot_favourite');
        }

        DB::table('user_favourites')->insert(
            array(
                'user_id' => $user_id,
                'plan_id' => $plan_id,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime()
            )
        );

        return redirect()->back()
            ->with('success-message', 'plan.favourite_success');
    }

    public function unfavourite($plan_id)
    {
        $plan = Plan::query()->find($plan_id);
        $user_id = Auth::user()->id;

        if (!$plan->usersWhoFavourited->contains('id', $user_id)) {
            return redirect()->back()
                ->with('danger-message', 'plan.cannot_unfavourite');
        }

        DB::table('user_favourites')
            ->where('user_id', $user_id)
            ->where('plan_id', $plan_id)->delete();

        $plan->usersWhoFavourited->pull('id', Auth::user()->id);
        return redirect()->back()
            ->with('success-message', 'plan.unfavourite_success');
    }
}
