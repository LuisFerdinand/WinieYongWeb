<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\RentalController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products/{type}', [PageController::class, 'productDetail'])->name('product.detail');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-submit', [PageController::class, 'submit'])->name('contact.submit');


// Service Route
use App\Http\Controllers\ServiceController;

Route::get('/rental', [ServiceController::class, 'rental'])->name('service.rental');
Route::get('/repair', [ServiceController::class, 'repair'])->name('service.repair');
// Route::get('/parts', [ServiceController::class, 'parts'])->name('service.parts');

// Rental Controller
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals/{id}', [RentalController::class, 'show'])->name('rental.show');
Route::get('/search', [RentalController::class, 'search'])->name('rentals.search');
Route::resource('rental', RentalController::class)->only(['index', 'show']);
Route::get('/rentals/search', [RentalController::class, 'search'])->name('rental.search');

// Route to repair page
Route::get('/repair', [ServiceController::class, 'repair'])->name('service.repair');


// Route to parts page
Route::get('/parts', [PartController::class, 'index'])->name('parts.index');
Route::get('/parts/{id}', [PartController::class, 'show'])->name('parts.show');
