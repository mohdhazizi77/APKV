<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include 'admin_web.php';

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

Route::prefix('/apkv')->group(function () {
    Route::view('/', 'admin.module-dashboard.dashboard')->name('index');
});


