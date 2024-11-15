<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Rutas para usuarios no autenticados
    Route::get('/', [AuthController::class,'index'])->name('login');
    Route::get('/registro', [AuthController::class,'registro'])->name('registro');
    Route::post('/registrar', [AuthController::class,'registrar'])->name('registrar');
    Route::post('/logear', [AuthController::class,'logear'])->name('logear');
});

Route::middleware(['auth'])->group(function () {
    // Rutas para usuarios autenticados
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/home', [AuthController::class,'home'])->name('home');
    Route::get('/home', [HomeController::class,'home'])->name('home');
    Route::get('/events', [EventsController::class,'events'])->name('events');
    Route::get('/gallery', [GalleryController::class,'gallery'])->name('gallery');
    Route::get('/contactUs', [ContactUsController::class,'contactUs'])->name('contactUs');
    Route::get('/aboutUs', [AboutUsController::class,'aboutUs'])->name('aboutUs');
    Route::get('/gallery/moogli', [GalleryController::class, 'showMoogli'])->name('gallery.moogli');
    Route::get('/gallery/bloody', [GalleryController::class, 'showBloody'])->name('gallery.bloody');
    Route::get('/events/{id}', [EventsController::class,'cityEvents'])->name('cityEvents');
    Route::get('/events/{id}/{event}', [EventsController::class,'showEvent'])->name('showEvent');
});

// Rutas solo para administradores
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view("modules/admin/admin");
    })->name('admin');
});