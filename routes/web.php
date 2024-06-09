<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LogActivityController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestKendaraanController;
use App\Http\Controllers\TambangController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Route User
Route::prefix('user')->group(function() {
    Route::get('login', [AuthController::class, 'index'])->name('user.login');
    Route::post('login-post', [AuthController::class, 'loginAdmin'])->name('user.login-post');
});

// Route Menu
Route::middleware('authorization')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::prefix('tambang')->group(function() {
        Route::get('/', [TambangController::class, 'index'])->name('tambang');
        Route::get('create', [TambangController::class, 'create'])->name('tambang.create');
        Route::post('store', [TambangController::class, 'store'])->name('tambang.store');
        Route::get('edit/{id?}', [TambangController::class, 'edit'])->name('tambang.edit');
        Route::get('view/{id?}', [TambangController::class, 'view'])->name('tambang.view');
        Route::post('update/{id?}', [TambangController::class, 'update'])->name('tambang.update');
        Route::get('delete/{id?}', [TambangController::class, 'delete'])->name('tambang.delete');
    });

    Route::prefix('driver')->group(function() {
        Route::get('/', [DriverController::class, 'index'])->name('driver');
        Route::get('create', [DriverController::class, 'create'])->name('driver.create');
        Route::post('store', [DriverController::class, 'store'])->name('driver.store');
        Route::get('edit/{id?}', [DriverController::class, 'edit'])->name('driver.edit');
        Route::get('view/{id?}', [DriverController::class, 'view'])->name('driver.view');
        Route::post('update/{id?}', [DriverController::class, 'update'])->name('driver.update');
        Route::get('delete/{id?}', [DriverController::class, 'delete'])->name('driver.delete');
    });

    Route::prefix('perusahaan')->group(function() {
        Route::get('/', [PerusahaanController::class, 'index'])->name('perusahaan');
        Route::get('create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
        Route::post('store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
        Route::get('edit/{id?}', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
        Route::get('view/{id?}', [PerusahaanController::class, 'view'])->name('perusahaan.view');
        Route::post('update/{id?}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
        Route::get('delete/{id?}', [PerusahaanController::class, 'delete'])->name('perusahaan.delete');
    });
    
    Route::prefix('kendaraan')->group(function() {
        Route::get('/', [KendaraanController::class, 'index'])->name('kendaraan');
        Route::get('create', [KendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('store', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('edit/{id?}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::get('view/{id?}', [KendaraanController::class, 'view'])->name('kendaraan.view');
        Route::post('update/{id?}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::get('delete/{id?}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });
    
    Route::prefix('request-kendaraan')->group(function() {
        Route::get('/', [RequestKendaraanController::class, 'index'])->name('request-kendaraan');
        Route::get('create', [RequestKendaraanController::class, 'create'])->name('request-kendaraan.create');
        Route::post('store', [RequestKendaraanController::class, 'store'])->name('request-kendaraan.store');
        Route::get('edit/{id?}', [RequestKendaraanController::class, 'edit'])->name('request-kendaraan.edit');
        Route::get('view/{id?}', [RequestKendaraanController::class, 'view'])->name('request-kendaraan.view');
        Route::post('update/{id?}', [RequestKendaraanController::class, 'update'])->name('request-kendaraan.update');
        Route::get('delete/{id?}', [RequestKendaraanController::class, 'delete'])->name('request-kendaraan.delete');
        Route::get('approve/{id?}', [RequestKendaraanController::class, 'approve'])->name('request-kendaraan.approve');
        Route::post('approved/{id?}', [RequestKendaraanController::class, 'approved'])->name('request-kendaraan.approved');
        Route::get('export', [RequestKendaraanController::class, 'export'])->name('request-kendaraan.export');
        Route::post('approved-by-pejabat/{id?}', [RequestKendaraanController::class, 'approvedByPejabat'])->name('request-kendaraan.approved-by-pejabat');
        Route::get('reject/{id?}', [RequestKendaraanController::class, 'reject'])->name('request-kendaraan.reject');
    });

    Route::prefix('monitoring')->group(function() {
        Route::get('/', [MonitoringController::class, 'index'])->name('monitoring');
    });

    Route::prefix('log-activity')->group(function() {
        Route::get('/', [LogActivityController::class, 'index'])->name('log-activity');
    });

    Route::prefix('profile')->group(function() {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::post('update/{id?}', [ProfileController::class, 'update'])->name('profile.update');
    });
});

