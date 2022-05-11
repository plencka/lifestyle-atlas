<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BrowserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plan/{plan_id}', [PlanController::class, 'index'])->name('plan.index');
Route::get('/plan/{plan_id}/{name}', [PlanController::class, 'show'])->name('plan.show');
Route::get('/delete/{plan_id}', [PlanController::class, 'delete'])->name('plan.delete');
Route::get('/favourite/{plan_id}', [PlanController::class, 'favourite'])->name('plan.favourite');
Route::get('/unfavourite/{plan_id}', [PlanController::class, 'unfavourite'])->name('plan.unfavourite');
Route::get('/create', [PlanController::class, 'create'])->name('plan.create');
Route::post('/', [PlanController::class, 'store'])->name('plan.store');
Route::get('/browse', [BrowserController::class, 'index'])->name('browse.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
