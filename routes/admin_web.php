<?php

use Illuminate\Support\Facades\Route;

// MODULE-REGISTRATION
use App\Http\Controllers\StudentController;

// MODULE-SYSTEM-CONFIGURATION
use App\Http\Controllers\ConfigStateController;
use App\Http\Controllers\ConfigCityController;

Route::prefix('registration')->group(function () {
    Route::view('index', 'admin.module-registration.index')->name('registration-index');

    Route::resource('student', StudentController::class);
    Route::get('getCity/{id}', [StudentController::class, 'getCity']);
});

Route::prefix('system-configuration')->group(function () {

    Route::view('index', 'admin.module-system-configuration.system-configuration-index')->name('system-configuration-index');

    Route::resource('config-state', ConfigStateController::class);
    Route::resource('config-city', ConfigCityController::class);
});
