<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public $app = [];

	public function __construct() {
		$this->app['name']	= Setting::where('name', 'name')->value('value');
		$this->app['menus']	= Menu::all(['name', 'slug', 'params'])
			->map(function ($menu) {
				$menu->params = json_decode($menu->params);
				return $menu;
			});

		Inertia::share('app', $this->app);
	}
}
