<?php

use App\Http\Controllers\BundleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BundleController as AdminBundleController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

Route::get('/', [PageController::class, 'home']);
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

Route::post('/contact', [PageController::class, 'contact']);
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // This is your main "Control Center"
    Route::get('/dashboard', [AdminPostController::class, 'dashboard'])->name('admin.dashboard');

    // Your existing resources
    Route::resource('products', AdminProductController::class);
    Route::resource('bundles', AdminBundleController::class);
    Route::resource('posts', AdminPostController::class);
    
    // View people who contacted you
    Route::get('messages', [AdminPostController::class, 'messages'])->name('admin.messages');
});