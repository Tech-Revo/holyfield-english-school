<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminContactUsController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSiteSettingController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Models\Teacher;
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



Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('profile', [ProfileController::class, 'index']);


    Route::get('cms/blogs/active-blogs', [AdminBlogController::class, 'index']);
    Route::get('cms/blogs/add-blog', [AdminBlogController::class, 'create']);
    Route::post('cms/blogs/add-blog', [AdminBlogController::class, 'store']);
    Route::get('cms/blogs/delete/{id}', [AdminBlogController::class, 'destroy']);
    Route::get('cms/blogs/blog-details/{slug}', [AdminBlogController::class, 'show']);
    Route::get('cms/contact-us', [AdminContactUsController::class, 'index']);
    Route::get('cms/events/view', [AdminEventController::class, 'index']);
    Route::get('cms/events', [AdminEventController::class, 'eventData']);
    Route::get('cms/events/add', [AdminEventController::class, 'addEventIndex']);
    Route::post('cms/events/add', [AdminEventController::class, 'store']);
    Route::get('cms/gallery', [AdminGalleryController::class, 'index']);
    Route::post('cms/gallery', [AdminGalleryController::class, 'store']);
    Route::get('cms/gallery/add', [AdminGalleryController::class, 'addGalleryImageIndex']);



    Route::get('settings/general-settings', [AdminSettingController::class, 'generalSettingIndex']);
    Route::get('settings/localization-settings', [AdminSettingController::class, 'localizationSettingIndex']);
    Route::get('settings/social-links-settings', [AdminSettingController::class, 'socialLinksIndex']);

    Route::post('settings/site-settings', [AdminSiteSettingController::class, 'store']);


    Route::get('teachers/view', [AdminTeacherController::class, 'viewTeachersIndex']);
    Route::get('teachers/view/{id}', [AdminTeacherController::class, 'show']);
    Route::get('teachers/add', [AdminTeacherController::class, 'index']);
    Route::post('teachers/add', [AdminTeacherController::class, 'store']);
});