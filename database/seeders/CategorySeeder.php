<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$categories = [
			[
				'name' => 'Uncategorized',
				'slug' => 'uncategorized'
			],
			[
				'name' => 'General',
				'slug' => 'general'
			]
		];

		foreach ($categories as $category) {
			$exists = Category::where('name', $category['name'])->count();
			if (!$exists) {
				Category::create($category);
			}
		}
	}
}
