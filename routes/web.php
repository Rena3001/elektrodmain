<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\LanguageLineController;
use App\Http\Controllers\Admin\ValveCategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AdminController::class,'index'])->name('admin.dashboard');

Route::group([ 'prefix' => LaravelLocalization::setLocale().'/control', 'as' => 'admin.'], function () {
Route::get('/', [AdminController::class,'index'])->name('index');

    Route::resource('language_line', LanguageLineController::class);
    Route::resource('langs', LangController::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('valve_categories', ValveCategoryController::class);
});

Route::get(LaravelLocalization::setLocale().'/control', [AuthController::class, 'login'])->name('login');
Route::post(LaravelLocalization::setLocale().'/control', [AuthController::class, 'login'])->name('login_login');
