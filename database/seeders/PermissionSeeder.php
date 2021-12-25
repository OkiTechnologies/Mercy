<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$permissions = [
			# Roles
			'role.create',
			'role.list',
			'role.view',
			'role.edit',
			'role.delete',
			# Permissions
			'permission.create',
			'permission.list',
			'permission.view',
			'permission.edit',
			'permission.delete',
			# Users
			'user.create',
			'user.list',
			'user.view',
			'user.edit',
			'user.delete',
		];

		foreach ($permissions as $permission) {
			$exists = Permission::where('name', $permission)->count();
			if (!$exists) {
				Permission::findOrCreate($permission);
			}
		}
	}
}
