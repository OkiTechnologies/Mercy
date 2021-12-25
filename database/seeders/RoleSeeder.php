<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$roles = [
			'Admin',
			'User',
		];

		foreach ($roles as $role) {
			$exists = Role::where('name', $role)->count();
			if (!$exists) {
				Role::findOrCreate($role);
			}
		}
	}
}
