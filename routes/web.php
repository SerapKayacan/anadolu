<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'loginPage'])->middleware('guest')->name('loginPage');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('kullanici')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/yeni', [UserController::class, 'create'])->name('create');
        Route::post('/yeni', [UserController::class, 'store'])->name('store');
        Route::get('/duzenle/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/duzenle/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/sil/{id}', [UserController::class, 'destroy'])->name('destroy');
        Route::get('/profil', [UserController::class, 'profile'])->name('profile');
        Route::put('/profileUpdate', [UserController::class, 'profileUpdate'])->name('profileUpdate');
    });

    Route::prefix('hizmet-kategorisi')->name('service-category.')->group(function () {
        Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
        Route::get('/yeni', [ServiceCategoryController::class, 'create'])->name('create');
        Route::post('/yeni', [ServiceCategoryController::class, 'store'])->name('store');
        Route::get('/duzenle/{id}', [ServiceCategoryController::class, 'edit'])->name('edit');
        Route::put('/duzenle/{id}', [ServiceCategoryController::class, 'update'])->name('update');
        Route::delete('/sil/{id}', [ServiceCategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('hizmet')->name('service.')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/yeni', [ServiceController::class, 'create'])->name('create');
        Route::post('/yeni', [ServiceController::class, 'store'])->name('store');
        Route::get('/duzenle/{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('/duzenle/{id}', [ServiceController::class, 'update'])->name('update');
        Route::delete('/sil/{id}', [ServiceController::class, 'destroy'])->name('destroy');
    });
});
