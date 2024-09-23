<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name("homepage");
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name("contact");
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name("contact.store");
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])->name("detail");


Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);
Route::put('admin/cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('admin.cars.updateImage');
Route::get('messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin.messages.index');
Route::delete('messages/{message}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin.messages.destroy');
Route::get('/admin/messages', [\App\Http\Controllers\Admin\MessageController::class, 'message'])->name('layouts.admin');


Route::get('/profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('frontend.homepage');