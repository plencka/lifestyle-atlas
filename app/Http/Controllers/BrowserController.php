<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class BrowserController extends Controller
{
    public function index()
    {
        return view('browser.browser')
            ->with('categories', Category::orderBy('name')->get())
            ->with('plans', Plan::orderBy('updated_at', 'DESC')
                ->paginate(5));
    }
}
