<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller {

	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

	use Authenticatable;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest')->except('logout');
	}

	public function username() {
		if (is_numeric(request()->username)) {
			return 'phone';
		} elseif (filter_var(request()->username, FILTER_VALIDATE_EMAIL)) {
			return 'email';
		}

		return 'username';
	}

	public function view() {
		return inertia('Auth/Login');
	}

	/**
	 * Handle users authentication.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
	 */
	public function login(Request $request) {
		if ($request->has(['username', 'password'])) {
			# Validation -------------------------------------------------------------#
			$rules = [
				'username' => 'required|string|min:3',
				'password' => 'required'
			];

			$validate = Validator::make($request->only(['username', 'password']), $rules);
			if ($validate->fails()) {
				if ($request->expectsJson()) {
					return response()->json(["error" => $validate->errors(), "status" => 'error'], 400);
				} else {
					return back()->withErrors($validate->errors());
				}
			}
			#-------------------------------------------------------------------------#

			if (auth()->attempt([$this->username() => $request->username, 'password' => $request->password], $request->remember)) {
				# Check if user is active
				if (!auth()->user()->active) {
					auth()->logout();

					if ($request->expectsJson()) {
						return response()->json(["error" => "Your account is not active!", "status" => 'error'], 303);
					} else {
						return back()->withErrors("Your account is not active!");
					}
				}

				if ($request->expectsJson()) {
					return response()->json([
						"message" => "success",
						"status" => true,
						"data" => auth()->user(),
					]);
				} else {
					return redirect()->route('home');
				}
			} else {
				if ($request->expectsJson()) {
					return response()->json(["error" => "These credentials do not match our records.", "status" => 'error'], 203);
				} else {
					return back()->withErrors("These credentials do not match our records!");
				}
			}
		}
	}

	public function logout() {
		Auth::guard('web')->logout();

		return redirect('/');
	}
}
