<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/front', \App\Http\Controllers\Fronts\IndexController::class)->name('front.index');
//Route::get('/front/regist', \App\Http\Controllers\Fronts\RegisterController::class)->name('front.regist');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', [\App\Http\Controllers\Admin\indexController::class, 'index'])->name('admin.home');
});
Route::group(['middleware' => ['can:admin-higher']], function() {
    Route::get('/admin/users', \App\Http\Controllers\Admin\Users\indexController::class)->name('admin.user.home');
});
