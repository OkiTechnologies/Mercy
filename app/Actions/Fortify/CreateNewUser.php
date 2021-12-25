<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers {

	use PasswordValidationRules;

	/**
	 * Validate and create a newly registered user.
	 *
	 * @param  array  $input
	 * @return \App\Models\User
	 */
	public function create(array $input) {
		$validated = Validator::make($input, [
			'first_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'middle_name' => ['bail', 'nullable', 'string', 'min:3', 'max:32'],
			'last_name' => ['bail', 'required', 'string', 'min:3', 'max:32'],
			'date_of_birth' => ['bail', 'nullable', 'date'],
			'gender' => ['bail', 'required', 'string', 'in:female,male'],
			'username' => ['bail', 'required', 'string', 'min:3', 'max:16', 'unique:users'],
			'phone' => ['bail', 'required', 'min:8', 'max:14', 'unique:users'],
			'email' => ['bail', 'nullable', 'email', 'max:255', 'unique:users'],
			'password' => $this->passwordRules(),
			'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
		])->validate();

		$validated["password"] = Hash::make($validated["password"]);

		$user = User::create($validated);
		$role	= Role::findOrCreate('User');

		$user->assignRole([$role->id]);

		return $user;
	}
}
