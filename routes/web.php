<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');

Route::get('/standard', [HomeController::class, 'standardRoom'])->name('standard');
Route::get('/deluxe', [HomeController::class, 'deluxeRoom'])->name('deluxe');
Route::get('/luxury', [HomeController::class, 'luxuryRoom'])->name('luxury');