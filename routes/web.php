<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//User routes
Route::get('/', [PageController::class, 'homepage'])->name('dashboard');
Route::get('/cars', [PageController::class, 'showCars'])->name('showCars');
Route::get('/car-details', [PageController::class, 'carDetails'])->name('car.details');

Route::prefix('/my-account')->middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'myAccount'])->name('dashboard.user');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile.user');
    Route::get('/orders', [PageController::class, 'orders'])->name('orders.user');
});

//Admin routes
Route::prefix('/admin')->middleware('auth')->group(function (){
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('dashboard.admin')->middleware(Admin::class);
    Route::prefix('/car')->group(function (){
        Route::get('/', [CarController::class, 'index'])->name('car.index');
        Route::get('/create', [CarController::class, 'create'])->name('car.create');
        Route::post('/store', [CarController::class, 'store'])->name('car.store');
        Route::get('/edit', [CarController::class, 'edit'])->name('car.edit');
        Route::post('/update', [CarController::class, 'update'])->name('car.update');
        Route::get('/delete', [CarController::class, 'delete'])->name('car.delete');
    })->middleware(Admin::class);
    Route::prefix('/rentals')->group(function (){
        Route::get('/manage', [RentalController::class, 'index'])->name('rentals.index');
        Route::get('/view', [RentalController::class, 'show'])->name('rentals.show');
        Route::get('/edit/{id}', [RentalController::class, 'edit'])->name('rentals.edit');
    })->middleware(Admin::class);
    Route::prefix('/customer')->group(function (){
        Route::get('/manage', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/view', [CustomerController::class, 'show'])->name('customer.show');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    })->middleware(Admin::class);
});

require __DIR__.'/auth.php';
