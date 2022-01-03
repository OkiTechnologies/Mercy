<?php

use App\Http\Controllers\Api\EventController as ApiEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function (Request $request) {
	return response()->json(['Welcome!']);
});

# Auth: Login
Route::post('login', [LoginController::class, 'login'])->name('api.login');

Route::get('events', [ApiEventController::class, 'index'])->name('api.event.index');
Route::get('event/next', [ApiEventController::class, 'next'])->name('api.event.next');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});
