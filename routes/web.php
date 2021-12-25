<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * --------------------------------------------------------------------------
 * Web Routes
 * --------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group. Now create something great!
 *
 */

Route::get('/', [AppController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
	Route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');

	Route::resource('user', UserController::class, [])->names('admin.user');
	// Route::get('/user/{user}/permissions', [UserController::class, 'getAllPermissions'])->name('api.user.permissions');
	Route::resource('role', RoleController::class, [])->names('admin.role');
});
