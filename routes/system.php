<?php

use App\Http\Controllers\Admin\CMSController;
use App\Http\Controllers\Admin\SystemSettingsController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'settings', 'middleware' => ['auth', Admin::class]], function(){
  Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [SystemSettingsController::class, 'profile'])->name('profile.index');
    Route::post('/update', [SystemSettingsController::class, 'updateProfile'])->name('profile.update');
  });
  Route::group(['prefix' => 'system'], function () {
    Route::get('/', [SystemSettingsController::class, 'system'])->name('system.index');
    Route::post('/update', [SystemSettingsController::class, 'updateSystem'])->name('system.update');
  });
  Route::group(['prefix' => 'mail'], function () {
    Route::get('/', [SystemSettingsController::class, 'mail'])->name('mail.index');
    Route::post('/update', [SystemSettingsController::class, 'updateMail'])->name('mail.update');
  });

  Route::controller(CMSController::class)->group(function () {
    Route::get('cms', 'index')->name('backend.cms.index');
    Route::get('cms/edit/{Page?}/{Section?}', 'editOrCreate')->name('backend.cms.edit');
    Route::post('cms/updateOrCreate', 'updateOrCreate')->name('backend.cms.update');
  });

});
