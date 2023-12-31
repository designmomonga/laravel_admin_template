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
    Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.home');
    //↓ロール権限で閲覧を許可するルーティング
    Route::group(['middleware' => ['can:admin-higher']], function() {
        Route::get('/admin/users', \App\Http\Controllers\Admin\Users\IndexController::class)->name('admin.user.home');
        Route::get('/admin/users/create', \App\Http\Controllers\Admin\Users\CreateController::class)->name('admin.user.create');
        Route::post('/admin/users/create', \App\Http\Controllers\Admin\Users\RegistController::class)->name('admin.user.regist');
        Route::get('/admin/users/edit', \App\Http\Controllers\Admin\Users\EditController::class)->name('admin.user.edit');
        Route::put('/admin/users/edit', \App\Http\Controllers\Admin\Users\UpdateController::class)->name('admin.user.update');
        Route::delete('/admin/users/edit', \App\Http\Controllers\Admin\Users\DeleteController::class)->name('admin.user.delete');
    });
});
