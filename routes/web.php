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
use App\Http\Controllers\Frontend\ServicesDetailController;
use App\Http\Controllers\Frontend\OnlineDoctorDetailController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Admin\CarouselController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::prefix('services-category')->group(function () {
    Route::get('/', [ServicesCategoryController::class, 'index'])->name('services-category.index');
});

Route::prefix('services')->group(function () {
    Route::get('/services-category/{id}', [ServicesController::class, 'showByCategory'])->name('services.byCategory');
});

Route::prefix('online-doctor')->group(function () {
    Route::get('/online-doctor', [OnlineDoctorController::class, 'showByCategory'])->name('onlineDoctor.byCategory');
});

Route::prefix('services-detail')->group(function () {
    Route::get('/show/{id}', [ServicesDetailController::class, 'show'])->name('services-detail.show');
});

Route::prefix('online-doctor-detail')->group(function () {
    Route::get('/show/{id}', [OnlineDoctorDetailController::class, 'show'])->name('online-doctor-detail.show');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
});

Route::prefix('carousel')->group(function () {
    Route::get('/', [CarouselController::class, 'index'])->name('carousel.index');
    Route::get('/yeni', [CarouselController::class, 'create'])->name('carousel.create');
    Route::post('/yeni', [CarouselController::class, 'store'])->name('carousel.store');
    Route::get('/duzenle/{id}', [CarouselController::class, 'edit'])->name('carousel.edit');
    Route::put('/duzenle/{id}', [CarouselController::class, 'update'])->name('carousel.update');
    Route::delete('/sil/{id}', [CarouselController::class, 'destroy'])->name('carousel.destroy');
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
