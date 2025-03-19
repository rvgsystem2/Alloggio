<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/properties', [HomeController::class, 'properties'])->name('properties');

Route::get('/properties/details', [HomeController::class, 'propertiesdetails'])->name('properties.details');

Route::get('/standard', [HomeController::class, 'standardRoom'])->name('standard');

