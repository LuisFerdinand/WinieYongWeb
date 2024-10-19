<?php

use App\Models\Type;
use App\Mail\JobApplicationMail;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JobManagementController;
use App\Http\Controllers\PartManagementController;
use App\Http\Controllers\RentalManagementController;
use App\Http\Controllers\CategoryManagementController;
use App\Http\Controllers\BrandManagementController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\ProjectManagementController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\TypeController;
use App\Models\Category;
use App\Models\Brand;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/projects/{id}', [PageController::class, 'show'])->name('project.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact-submit', [PageController::class, 'submit'])->name('contact.submit');

// Rental routes
Route::get('services/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('services/rental/{type:type_slug}', [RentalController::class, 'show'])->name('rental.show');
Route::get('/search', [RentalController::class, 'search'])->name('rentals.search');
Route::resource('services/rental', RentalController::class)->only(['index', 'show']);
Route::get('/rentals/search', [RentalController::class, 'search'])->name('rental.search');
Route::get('services/c/{category:category_slug}', function(Category $category){
    return view('services.rental.index', [
        'rentals'=>$category->types->load('category', 'brand'),
        'title'=>"Types by Category: $category->category_name"
    ]);
});
Route::get('/2/categories', function(Category $category){
    return view('2/categories', [
        'title'=>'Type Categories',
        'categories'=>Category::all()
    ]);
});
Route::get('/2/brands/{brand:brand_slug}', function(Brand $brand){
    return view('2/posts', [
        'title'=>"Types by Brand: $brand->brand_name",
        'types'=>$brand->types->load('category', 'brand')
    ]);
});


Route::get('/2/categories/{category:category_slug}', function(Category $category){
    return view('2/posts', [
        'types'=>$category->types,
        'title'=>"Types by Category: $category->category_name"
    ]);
});
Route::get('/2/categories', function(Category $category){
    return view('2/categories', [
        'title'=>'Type Categories',
        'categories'=>Category::all()
    ]);
});
Route::get('/2/brands/{brand:brand_slug}', function(Brand $brand){
    return view('2/posts', [
        'title'=>"Types by Brand: $brand->brand_name",
        'types'=>$brand->types
    ]);
});


Route::get('/2/posts', [TypeController::class, 'index']);
Route::get('/2/posts/{type:type_slug}', [TypeController::class, 'show']);










// Route to repair page
Route::get('services/repair', [ServiceController::class, 'repair'])->name('service.repair');


// Route to parts page
Route::get('services/parts', [PartController::class, 'index'])->name('parts.index');
Route::get('/parts/{id}', [PartController::class, 'show'])->name('parts.show');


// Career Route
// Route for the career page (listing jobs)
Route::get('/careers', [JobController::class, 'index'])->name('career.index');
// Route for showing individual job details
Route::get('/careers/{id}', [JobController::class, 'show'])->name('career.show');
Route::post('/career/{id}/apply', [JobController::class, 'apply'])->name('career.apply');

// Product Route
Route::get('/products/sunward', [ProductController::class, 'index'])->name('products.sunward.index');
Route::get('/products/sunward/{id}', [ProductController::class, 'show'])->name('products.sunward.show');




// LOGIN & REGISTER ROUTE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// reset password route
Route::get('password/reset', [ResetPasswordController::class, 'showResetRequestForm'])->name('password.request');
Route::post('password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Protected Routes
Route::middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::middleware(['auth', 'check.role:admin'])->group(function () {
    Route::resource('part-management', PartManagementController::class);
    Route::resource('job-management', JobManagementController::class);
    Route::resource('product-management', ProductManagementController::class);
    Route::resource('project-management', ProjectManagementController::class);
});

// Route Create Slug
Route::get('dashboard/services/machinery-rentals/rentals-management/checkSlug', [RentalManagementController::class, 'checkSlug']);
Route::get('dashboard/services/machinery-rentals/categories-management/checkSlug', [RentalManagementController::class, 'checkSlug']);
Route::get('dashboard/services/machinery-rentals/brands-management/checkSlug', [RentalManagementController::class, 'checkSlug']);

// Route Rental Management
Route::middleware(['auth', 'check.role:admin'])->prefix('dashboard/services/machinery-rentals')->group(function () {
    Route::resource('rentals-management', RentalManagementController::class)
        ->parameters(['rentals-management' => 'type:type_slug']);
    Route::resource('categories-management', CategoryManagementController::class)
    ->parameters(['categories-management' => 'category:category_slug']);
    Route::resource('brands-management', BrandManagementController::class)
        ->parameters(['brands-management' => 'brand:brand_slug']);
});




// trancking click route
Route::get('/products/{id}/track-click', [ProductController::class, 'trackClick'])->name('products.trackClick');
Route::get('dashboard/clicks', [DashboardController::class, 'showClickData'])->name('dashboard.clicks');
Route::get('/rentals/{id}/track-click', [RentalController::class, 'trackClick'])->name('rentals.trackClick');


// user controller
Route::middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/dashboard/users/{id}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');
    Route::delete('/dashboard/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
