<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products/{type}', [PageController::class, 'productDetail'])->name('product.detail');
Route::get('/services/{type}', [PageController::class, 'serviceDetail'])->name('service.detail');


// Route::get('/products/excavators', function () {
//     return view('products.excavators');
// });

// Route::get('/products/cranes', function () {
//     return view('products.cranes');
// });

// Route::get('/products/bulldozers', function () {
//     return view('products.bulldozers');
// });

// Route::get('/services/rentals', function () {
//     return view('services.rentals');
// });

// Route::get('/services/maintenance', function () {
//     return view('services.maintenance');
// });

// Route::get('/services/parts', function () {
//     return view('services.parts');
// });
