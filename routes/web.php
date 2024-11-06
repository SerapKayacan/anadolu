<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesCategoryController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\OnlineDoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/services/{id}', [HomeController::class, 'show'])->name('services.show');

});

Route::prefix('services-category')->group(function () {
    Route::get('/', [ServicesCategoryController::class, 'index'])->name('services-category.index');

});
Route::prefix('services')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services.index');

});
Route::prefix('online-doctor')->group(function () {
    Route::get('/', [OnlineDoctorController::class, 'index'])->name('online-doctor.index');

});

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

    Route::prefix('randevu')->name('appointment.')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index');
        Route::get('/duzenle/{id}', [AppointmentController::class, 'edit'])->name('edit');
        Route::put('/duzenle/{id}', [AppointmentController::class, 'update'])->name('update');
    });
});
