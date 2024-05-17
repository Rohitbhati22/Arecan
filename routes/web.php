<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomePageController::class, 'index']);
Route::get('/image-classification', [HomePageController::class, 'imageClassification']);
Route::get('/image-to-text', [HomePageController::class, 'imageToText']);
Route::get('/image-remove-bg', [HomePageController::class, 'imageRemoveBG']);
Route::get('/image-editor', [HomePageController::class, 'imageEditor']);

require __DIR__.'/auth.php';
