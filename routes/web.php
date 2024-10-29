<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('home.index');
// });

route::get('/',[HomeController::class, 'index']);
route::post('/upload_post',[HomeController::class, 'upload']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class, 'index']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Define route for Home
Route::get('/home', function () {
    return view('home.index'); 
})->name('home.index');

// Define route for Category
Route::get('/category', function () {
    return view('home.catalog'); 
})->name('home.catalog');

// Define route for Announcement
Route::get('/announcement', function () {
    return view('home.announcement'); 
})->name('home.announcement');

// Define route for About Us
Route::get('/about', function () {
    return view('home.about'); 
})->name('home.about');



Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
Route::get('/home/ComSci-info-&-gen-technology', [HomeController::class, 'csigt'])->name('home.csigt');
Route::get('/home/Philosophy-and-Psychology', [HomeController::class, 'PandP'])->name('home.philoandpsy');
Route::get('/home/Religion', [HomeController::class, 'religion'])->name('home.Religion');
Route::get('/home/social-science', [HomeController::class, 'socialscience'])->name('home.social-science');
Route::get('/home/language', [HomeController::class, 'language'])->name('home.language');
Route::get('/home/technology', [HomeController::class, 'technology'])->name('home.technology');
Route::get('/home/arts-recreation', [HomeController::class, 'artsRecreation'])->name('home.arts-recreation');
Route::get('/home/literature', [HomeController::class, 'literature'])->name('home.literature');
Route::get('/home/history-geography', [HomeController::class, 'historyGeography'])->name('home.history-geography');
Route::get('/home/course-of-studies', [HomeController::class, 'program'])->name('home.program');