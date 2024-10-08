<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RentalController as UserRentalController;
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

//Admin routes
Route::prefix('/admin')->middleware('auth')->group(function (){
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('dashboard.admin')->middleware(Admin::class);
    Route::prefix('/car')->group(function (){
        Route::get('/', [CarController::class, 'index'])->name('car.index');
        Route::get('/create', [CarController::class, 'create'])->name('car.create');
        Route::post('/store', [CarController::class, 'store'])->name('car.store');
        Route::get('/edit/{id}', [CarController::class, 'edit'])->name('car.edit');
        Route::post('/update/{id}', [CarController::class, 'update'])->name('car.update');
        Route::get('/delete/{id}', [CarController::class, 'destroy'])->name('car.delete');
    })->middleware(Admin::class);
    Route::prefix('/rentals')->group(function (){
        Route::get('/manage', [RentalController::class, 'index'])->name('rentals.index');
        Route::get('/view', [RentalController::class, 'show'])->name('rentals.show');
        Route::get('/edit/{id}', [RentalController::class, 'edit'])->name('rentals.edit');
        Route::get('/approve/{id}', [RentalController::class, 'approve'])->name('rentals.approved');
        Route::get('/complete/{id}', [RentalController::class, 'complete'])->name('rentals.completed');
        Route::get('/cancel/{id}', [RentalController::class, 'cancel'])->name('rentals.cancelled');
        Route::get('/history/{id}', [RentalController::class, 'history'])->name('rentals.history');
    })->middleware(Admin::class);
    Route::prefix('/customer')->group(function (){
        Route::get('/manage', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/view', [CustomerController::class, 'show'])->name('customer.show');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    })->middleware(Admin::class);
});

Route::get('/toast', function(){
    return redirect()->back()->with('success', 'toast success');
});

require __DIR__.'/auth.php';
