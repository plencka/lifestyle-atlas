<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Activity_Plan;
use App\Models\Category;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
        
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
       
        return view('create')
        ->with('categories', Category::orderBy('name')->get())
        ->with('activities', Activity::orderBy('name')->get());
        
    }
    public function store(Request $request){
        $request->validate([
            'PlanName' => 'required',
            'category' => 'required',
        ]);
            
            $plan = new Plan();
            $plan -> user_id = auth()->user()->id;
            $plan -> name = $request->input('PlanName');
            $plan -> category_id= $request->input('category');
            $plan -> save();
            return redirect(route('plan.index'))
                ->with('message', 'Your Plan has been created');
        
    }

}