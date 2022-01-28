<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$settings = [
			[
				'name'			=> 'name',
				'category'	=> 'app',
				'value'			=> config('app.name')
			], [
				'name'			=> 'telephone',
				'category'	=> 'app.contact',
				'value'			=> "+234-000-000-0000"
			], [
				'name'			=> 'email',
				'category'	=> 'app.contact',
				'value'			=> "info@example.com"
			],
		];

		foreach ($settings as $setting) {
			$exists = Setting::where('name', $setting['name'])->count();
			if (!$exists) {
				$setting['slug']				= Str::slug($setting['name']);
				$setting['category_id']	=	$this->slug_to_category_id($setting['category']);
				unset($setting['category']);

				Setting::create($setting);
			}
		}
	}

	public function slug_to_category_id($slug) {
		if (!class_exists("App\Models\Category"))
			return;

		$categories	= explode('.', $slug);
		$parent			= NULL;
		foreach ($categories as $value) {
			$name			= Str::title($value);
			$category	= Category::where('name', $name)->value('id');

			if (!$category) {
				$new = Category::create([
					'parent'	=> $parent ?? NULL,
					'name'		=> $name,
					'slug'		=> Str::slug($name)
				]);

				$category = $new->id;
			}

			# final result becomes the next parent and final ID
			$parent = $category;
		}

		return $parent;
	}
}
