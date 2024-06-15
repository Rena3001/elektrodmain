<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\LanguageLineController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ValveCategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Front
Route::get('/', function () {
    return "Home Page";
});

// Admin
Route::group(['middleware' => 'auth', 'prefix' => LaravelLocalization::setLocale() . '/control', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Resource
    Route::resource('language_line', LanguageLineController::class);
    Route::resource('langs', LangController::class);
    Route::resource('valve_categories', ValveCategoryController::class);
    Route::resource('sliders', SliderController::class);
});

// Admin Login
Route::get('/control/login', [AuthController::class, 'login'])->name('login');
Route::post('/control/login', [AuthController::class, 'login'])->name('login_login');