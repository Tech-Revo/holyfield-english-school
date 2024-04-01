<?php


use App\Http\Controllers\School\ContactController;
use App\Http\Controllers\School\HomeController;
use App\Http\Controllers\School\SchoolAboutController;
use App\Http\Controllers\School\SchoolBlogController;
use App\Http\Controllers\School\SchoolEventController;
use App\Http\Controllers\School\SchoolTeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[HomeController::class,'index']);

Route::get('contact',[ContactController::class,'index']);
Route::get('about-us', [SchoolAboutController::class, 'index']);
Route::get('teachers', [SchoolTeacherController::class, 'index']);
Route::get('blogs', [SchoolBlogController::class, 'index']);
Route::get('blogs/{slug}', [SchoolBlogController::class, 'show']);
Route::get('events', [SchoolEventController::class, 'index']);