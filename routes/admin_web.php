<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentRegistrationController;

use App\Http\Controllers\ConfigStateController;

Route::prefix('registration')->group(function () {
    Route::view('index', 'admin.module-registration.registration-index')->name('registration-index');

    Route::get('student-registration', [StudentRegistrationController::class, 'index'])->name('student-registration');
    Route::get('getCity/{parameter}', [StudentRegistrationController::class, 'getCity']);
    Route::get('getState/{cityId}', [StudentRegistrationController::class, 'getState']);
});

Route::prefix('system-configuration')->group(function () {
    Route::view('index', 'admin.module-system-configuration.system-configuration-index')->name('system-configuration-index');

    Route::get('config-state', [ConfigStateController::class, 'index'])->name('config-state');
});


