<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Uploads;
// Route::get('/', function () {
//     return view('home.index');
// });

route::get('/',[HomeController::class, 'index']);
Route::post('/upload_post', [HomeController::class, 'uploads']);
Route::post('/upload_post', [HomeController::class, 'uploads'])->name('upload_post');



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

Route::get('/home/index', [HomeController::class, 'home'])->name('home.index');
Route::get('/home/catalog', [HomeController::class, 'catalog'])->name('home.catalog');
Route::get('/home/announcement', [HomeController::class, 'announcement'])->name('home.announcement');
Route::get('/home/about', [HomeController::class, 'about'])->name('home.about');

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

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/users/index', [UserController::class, 'index'])->middleware('auth')->name('users.index');

Route::get('/analytic', function () {
    return view('/home/analytic');
})->name('analytic');