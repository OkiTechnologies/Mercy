<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class AppController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->app['test'] = 'Hi';
		// code

		parent::__construct();
	}

	/**
	 * Home page
	 */
	public function home(Request $request) {
		return inertia('Welcome', [
			'canLogin' => Route::has('login'),
			'canRegister' => Route::has('register'),
			'laravelVersion' => Application::VERSION,
			'phpVersion' => PHP_VERSION,
		]);
	}

	public function dashboard(Request $request) {
		return inertia('Dashboard');
	}
}
