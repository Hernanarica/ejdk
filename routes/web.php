<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(DashboardController::class)->middleware('auth')->prefix('/dashboard')->group(function () {
	Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');
	Route::get('/products', [DashboardController::class, 'products'])->name('dashboard_products.index');
	Route::get('/galleries', 'galleries')->name('dashboard_gallery.index');
	Route::get('/testimonials', 'testimonials')->name('dashboard_testimonials.index');
	Route::get('/users', 'users')->name('dashboard_users.index');
});

Route::controller(ProductController::class)->prefix('/products')->group(function () {
	Route::get('', 'index')->name('products.index');
	Route::get('/create', 'create')->name('products.create')->middleware('auth');
	Route::post('', 'store')->name('products.store')->middleware('auth');
	Route::get('/{id}/edit', 'edit')->name('products.edit')->middleware('auth');
	Route::patch('/{id}', 'update')->name('products.update')->middleware('auth');
	Route::delete('/{id}', 'destroy')->name('products.destroy')->middleware('auth');
});

Route::controller(TestimonialController::class)->middleware('auth')->prefix('/testimonials')->group(function () {
	Route::get('/create', 'create')->name('testimonials.create');
	Route::post('', 'store')->name('testimonials.store');
	Route::get('/{id}/edit', 'edit')->name('testimonials.edit');
	Route::patch('/{id}', 'update')->name('testimonials.update');
	Route::delete('/{id}', 'destroy')->name('testimonials.destroy');
});

Route::controller(GalleryController::class)->middleware('auth')->prefix('/gallery')->group(function () {
	Route::get('/create', 'create')->name('gallery.create');
	Route::post('', 'store')->name('gallery.store');
	Route::get('/{id}/edit', 'edit')->name('gallery.edit');
	Route::patch('/{id}', 'update')->name('gallery.update');
	Route::delete('/{id}', 'destroy')->name('gallery.destroy');
});

Route::controller(UserController::class)->middleware('auth')->prefix('/users')->group(function () {
	Route::get('/create', 'create')->name('users.create');
	Route::post('', 'store')->name('users.store');
	Route::get('/{id}/edit', 'edit')->name('users.edit');
	Route::patch('/{id}', 'update')->name('users.update');
	Route::delete('/{id}', 'destroy')->name('users.destroy');
});

Route::controller(AuthController::class)->prefix('/auth')->group(function () {
	Route::get('/login', 'index')->name('login.index');
	Route::post('/login', 'login')->name('login.store');
	Route::post('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->prefix('/register')->group(function () {
	Route::get('/create', 'create')->name('register.create');
	Route::post('', 'store')->name('register.store');
});