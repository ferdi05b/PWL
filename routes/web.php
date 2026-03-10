<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('starter');
});

//Category Mgmt
Route::get('/category', [CategoryController::class, "index"])-> name('category.index');
Route::get('/category/create', [CategoryController::class, "create"])-> name('category.create');
Route::post('/category/create', [CategoryController::class, "store"])-> name('category.store');
Route::get('/category/{category}/edit', [CategoryController::class, "edit"])-> name('category.edit');
Route::put('/category/{category}/edit', [CategoryController::class, "update"])-> name('category.update');
Route::put('/category/{category}/delete', [CategoryController::class, "destroy"])-> name('category.delete');

//Route::get('/student', [StudentController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
