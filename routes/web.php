<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';

/*
 * Front Site Routes
 */
Route::prefix('/')->name('front.')->group(function () {

    # ======================================= index page
    Route::view('', 'front.index')->name('index');

    # ======================================= about page
    Route::view('about', 'front.about')->name('about');

    # ======================================= contact page
    Route::view('contact', 'front.contact')->name('contact');

    # ======================================= projects page
    Route::view('projects', 'front.projects')->name('projects');

    # ======================================= services page
    Route::view('services', 'front.services')->name('services');

    # ======================================= team page
    Route::view('team', 'front.team')->name('team');

    # ======================================= testimonial page
    Route::view('testimonial', 'front.testimonial')->name('testimonial');
});
/*
 * Dashboard Routes
 */
Route::prefix('/admin')->name('admin.')->group(function () {

    # ======================================= index page
    Route::view('/', 'admin.index')->name('index');

    # ======================================= Login page
    Route::view('/login', 'admin.auth.login')->name('login');

});
