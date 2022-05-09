<?php

namespace App\Http\Controllers;

class CreatePlanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
    }
}
