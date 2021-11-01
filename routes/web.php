<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SendContactController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SocialNetworkController;
use App\Http\Controllers\WorkExperienceController;
use App\Http\Controllers\PDFController;
use App\Models\Contact;
use App\Models\Education;
use App\Models\PersonalInfo;
use App\Models\ProfessionalSkill;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;
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

Route::get('create-pdf-file', [PDFController::class, 'index']);
Route::get('/', function () {
    $resume = PersonalInfo::first();
    $skills = ProfessionalSkill::all();
    $works = WorkExperience::all();
    $educations = Education::all();
    $socialnetwork = SocialNetwork::all();
    return view('site.boot', compact('resume', 'skills', 'works', 'educations', 'socialnetwork'));
});
Route::resource('sendcontact', SendContactController::class);
Route::get('logout', [LoginController::class, 'logout']);
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('resume', ResumeController::class);
    Route::resource('skills', SkillsController::class);
    Route::resource('workexperience', WorkExperienceController::class);
    Route::resource('education', EducationController::class);
    Route::resource('socialnetwork', SocialNetworkController::class);
    Route::resource('contacts', ContactController::class);
});
