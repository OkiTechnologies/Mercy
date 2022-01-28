<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$menus = [
			[
				'label'			=> 'Home',
				'href'			=> route('home'),
				'title'			=> 'Home',
				'parent'		=> NULL,
				'class'			=> ""
			], [
				'label'			=> 'Contact Us',
				'href'			=> "#",
				'title'			=> 'Contact Us',
				'parent'		=> NULL,
				'class'			=> ""
			],
		];

		foreach ($menus as $menu) {
			$exists = Menu::where('name', $menu['label'])->count();
			if (!$exists) {
				$menu['parent']	=	$menu['parent'] ? Menu::where('name', $menu['parent'])->value('id') : NULL;

				$params = json_encode($menu);
				Menu::create([
					'name'		=> Str::title($menu['label']),
					'slug'		=> Str::slug($menu['label']),
					'params'	=> $params,
				]);
			}
		}
	}
}
