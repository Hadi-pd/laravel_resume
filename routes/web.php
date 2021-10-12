<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Models\PersonalInfo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $resume = PersonalInfo::first();
    return view('site.boot',compact('resume'));
});
Route::get('logout',[LoginController::class,'logout']);


Route::middleware(['auth', 'isAdmin'])->group(function() {
Route::get('admin',[AdminController::class,'index'])->name('admin');
Route::resource('category', CategoryController::class);
Route::resource('resume', ResumeController::class);


 
});
