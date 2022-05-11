<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class BrowserController extends Controller
{
    public function index(Request $request)
    {
        $searchKeys = [];
        $queries = [];
        if($request->has('search')){
            if(! empty($request->search)) {
                array_push($queries,['name', 'LIKE', '%' . $request->search . '%']);
            }
            $searchKeys['search'] = $request->search;
        }

        if($request->has('category')){
            if($request->category > 0) {
                array_push($queries,['category_id', '=', $request->category]);
            }
            $searchKeys['category'] = $request->category;
        }

        $plans = Plan::where($queries)->paginate(5);
        $categories = Category::all();

        $filter = new \stdClass;
        $filter->category = $request->category;
        $filter->search = $request->search;

        $keys = [
            'plans' => $plans,
            'categories' => $categories,
            'filter' => $filter,
            $searchKeys
        ];

        return view('browser.browser')
            ->with($keys);
    }
}
