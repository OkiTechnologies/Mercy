<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\CreateNewUser;

class RegisterController extends Controller {
	/*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

	use CreateNewUser;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
			'first_name' => 'required|string|min:3|max:32',
			'last_name' => 'required|string|min:3|max:32',
			'gender' => 'required|string|in:male,female',
			'username' => 'required|string|min:3|max:16|unique:users',
			'phone' => 'required|numeric|unique:users',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\User
	 */
	protected function create(array $data) {
		return User::create([
			'first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
			'gender' => $data['gender'],
			'username' => $data['last_name'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			//
			'name' => '',
		]);
	}
}
