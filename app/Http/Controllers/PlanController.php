<?php

namespace App\Http\Controllers;

use App\Models\Plan;

class PlanController extends Controller
{
    function show($id){

        $selected_plan = Plan::query()->find($id);

        return view('plan',compact('selected_plan'));
    }
}
