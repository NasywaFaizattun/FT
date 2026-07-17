<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('/hero', [HeroController::class, 'edit'])->name('hero.edit');
        Route::put('/hero', [HeroController::class, 'update'])->name('hero.update');
        Route::resource('members', MemberController::class)->except(['show']);
        Route::resource('stories', StoryController::class)->except(['show']);
        Route::get('/contact', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('/contact', [ContactController::class, 'update'])->name('contact.update');
    });
});

