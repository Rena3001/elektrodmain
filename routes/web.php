<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\LanguageLineController;
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

Route::group([ 'prefix' => LaravelLocalization::setLocale().'/control', 'as' => 'admin.'], function () {
      Route::get('/', [AdminController::class,'index'])->name('dashboard');
    Route::resource('language_line', LanguageLineController::class);
    Route::resource('langs', LangController::class);
});

