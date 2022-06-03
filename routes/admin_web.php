<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentRegistrationController;

use App\Http\Controllers\ConfigStateController;
use App\Http\Controllers\ConfigCityController;

Route::prefix('registration')->group(function () {
    Route::view('index', 'admin.module-registration.registration-index')->name('registration-index');

    Route::get('student-registration', [StudentRegistrationController::class, 'index'])->name('student-registration');
    Route::get('getCity/{parameter}', [StudentRegistrationController::class, 'getCity']);
    Route::get('getState/{cityId}', [StudentRegistrationController::class, 'getState']);
});

Route::prefix('system-configuration')->group(function () {

    Route::view('index', 'admin.module-system-configuration.system-configuration-index')->name('system-configuration-index');

    Route::get('config-state', [ConfigStateController::class, 'index'])->name('config-state');
    Route::get('config-state-create', [ConfigStateController::class, 'create'])->name('config-state-create');

    Route::get('config-city', [ConfigCityController::class, 'index'])->name('config-city');
    Route::get('config-city-create', [ConfigCityController::class, 'create'])->name('config-city-create');

});


