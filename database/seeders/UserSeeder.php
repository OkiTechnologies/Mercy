<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$users = [
			[
				'first_name' => "Admin",
				'last_name' => "System",
				'username' => "admin",
				'email' => "admin@example.com",
				'phone' => "00000000000",
				'password' => Hash::make('password'),
			], [
				'first_name' => "User",
				'last_name' => "System",
				'username' => "user",
				'email' => "user@example.com",
				'phone' => "00000000001",
				'password' => Hash::make('password'),
			]
		];

		foreach ($users as $user) {
			$exists = User::where('username', $user['username'])->count();
			if (!$exists) {
				$user = User::create($user);

				if ($user['username'] == "admin") {
					$role					= Role::findOrCreate('Admin');
					$permissions	= Permission::pluck('id', 'id')->all();

					$role->syncPermissions($permissions);
					$user->assignRole([$role->id]);
				} else {
					$role					= Role::findOrCreate('User');

					$user->assignRole([$role->id]);
				}
			}
		}
	}
}
