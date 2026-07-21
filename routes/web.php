<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RentalController as UserRentalController;
use Illuminate\Support\Facades\Route;


//Frontend routes
Route::get('/', [PageController::class, 'homepage'])->name('dashboard');
Route::get('/cars', [PageController::class, 'showCars'])->name('showCars');
Route::get('/car-details/{id}', [PageController::class, 'carDetails'])->name('car.details');
Route::get('/search-cars', [CarController::class, 'search'])->name('car.search');
Route::get('/cars/filter', [CarController::class, 'filterCars'])->name('cars.filter');
Route::get('/search-users', [CustomerController::class, 'search'])->name('user.search');

Route::middleware('auth')->group(function(){
    Route::prefix('/book')->group(function(){
        Route::post('/car/{userId}/{carId}', [UserRentalController::class, 'store'])->name('rental.store');
        Route::get('/cancel/{id}', [UserRentalController::class, 'cancel'])->name('rental.cancel');
    });
    Route::prefix('/my-account')->group(function () {
        Route::get('/', [PageController::class, 'myAccount'])->name('dashboard.user');
        Route::get('/profile', [PageController::class, 'profile'])->name('profile.user');
        Route::get('/orders', [PageController::class, 'orders'])->name('orders.user');
    });
});



Route::get('/toast', function(){
    return redirect()->back()->with('success', 'toast success');
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/system.php';
