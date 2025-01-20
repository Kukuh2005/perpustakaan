<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PustakaController;

Route::get('/', [AuthenticatedSessionController::class, 'create']);
Route::get('/postlogin', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::get('/register/store', [RegisteredUserController::class, 'store']);

Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('admin/rak', RakController::class);
    Route::resource('admin/ddc', DdcController::class);
    Route::resource('admin/format', FormatController::class);
    Route::resource('admin/penerbit', PenerbitController::class);
    Route::resource('admin/pengarang', PengarangController::class);
    Route::resource('admin/pustaka', PustakaController::class);
});

// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
