<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/index', function () {
//    return view('app.index');
//});
Route::get('/index', [\App\Http\Controllers\MainController::class, 'index'])->name('index');

//Route::get('/', [CategoryController::class, 'index']);
Route::resource('category', CategoryController::class)->names('panelcategory');
Route::resource('product', \App\Http\Controllers\panel\ProductController::class)->names('panelproduct');
Route::resource('city', \App\Http\Controllers\panel\CityController::class)->names('city');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
