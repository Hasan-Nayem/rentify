<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/cars', [PageController::class, 'showCars'])->name('showCars');
Route::get('/car-details', [PageController::class, 'carDetails'])->name('car.details');

Route::prefix('/my-account')->group(function () {
    Route::get('/', [PageController::class, 'myAccount'])->name('dashboard.user');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile.user');
    Route::get('/orders', [PageController::class, 'orders'])->name('orders.user');
});

require __DIR__.'/auth.php';
