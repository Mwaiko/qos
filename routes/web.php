<?php

use App\Http\Controllers\BundleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BundleController as AdminBundleController;
use App\Http\Controllers\Admin\ContactController as AdminContactController; 

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about']);
Route::get('/farm', [PageController::class, 'farm']);

Route::get('/produce', [ProductController::class, 'index']);
Route::get('/produce/{slug}', [ProductController::class, 'show']);

Route::get('/baskets', [BundleController::class, 'index']);
Route::get('/baskets/{slug}', [BundleController::class, 'show']);

Route::get('/learn', [PostController::class, 'index']);
Route::get('/learn/{slug}', [PostController::class, 'show']);
// The route Laravel was looking for
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// Add this line to SHOW the form
Route::get('/contact', [PageController::class, 'contact'])->name('contact.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/count', [CartController::class, 'getCount'])->name('cart.count');

// Checkout Routes
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/checkout/process', [CartController::class, 'processOrder'])->name('checkout.process');
Route::get('/order/success', [CartController::class, 'orderSuccess'])->name('order.success');
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // This is your main "Control Center"
    Route::get('/dashboard', [AdminPostController::class, 'dashboard'])->name('admin.dashboard');

    // Your existing resources
    Route::resource('products', AdminProductController::class);
    Route::resource('bundles', AdminBundleController::class);
    Route::resource('posts', AdminPostController::class);
    
    Route::get('messages', [AdminContactController::class, 'messages'])->name('admin.messages');
});