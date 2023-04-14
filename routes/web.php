<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('/',[AdminController::class, 'dashboard'])->name('admin');
    Route::get('admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

    // ADMIN PROFILE
    Route::get('/profile', [AdminController::class, 'edit'])->name('admin.profile');
    Route::patch('/profile', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/profile', [AdminController::class, 'destroy'])->name('admin.destroy');

    // ADMIN BANNER SECTION
    Route::resource('/banner', \App\Http\Controllers\Admin\BannerController::class);

    // ADMIN CATEGORY SECTION
    Route::resource('/category', \App\Http\Controllers\Admin\CategoryController::class);
});