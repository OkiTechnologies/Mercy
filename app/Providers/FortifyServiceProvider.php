<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Validator;

class FortifyServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		Fortify::createUsersUsing(CreateNewUser::class);
		Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
		Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
		Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

		RateLimiter::for('login', function (Request $request) {
			$email = (string) $request->email;

			return Limit::perMinute(5)->by($email . $request->ip());
		});

		RateLimiter::for('two-factor', function (Request $request) {
			return Limit::perMinute(5)->by($request->session()->get('login.id'));
		});

		Fortify::authenticateUsing(function (Request $request) {
			return $this->login($request);
		});
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
				// return back()->withErrors($validate->errors());
			}
			#-------------------------------------------------------------------------#

			if (auth()->attempt([$this->username() => $request->username, 'password' => $request->password], $request->remember)) {
				# Check if user is active
				if (!auth()->user()->active) {
					auth()->logout();
					// return session()->put('errors', ['Your account is not active!']);
					// return back()->withErrors("Your account is not active!");
				}

				# login successful!
				return auth()->user();
			}
		}
	}

	public function username() {
		if (is_numeric(request()->username)) {
			return 'phone';
		} elseif (filter_var(request()->username, FILTER_VALIDATE_EMAIL)) {
			return 'email';
		}

		return 'username';
	}
}
