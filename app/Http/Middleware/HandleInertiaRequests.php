<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Str;
use Inertia\Inertia;

class HandleInertiaRequests extends Middleware {

	/**
	 * The root template that's loaded on the first page visit.
	 *
	 * @see https://inertiajs.com/server-side-setup#root-template
	 * @var string
	 */
	protected $rootView = 'guest';

	/**
	 * Sets the root template that's loaded on the first page visit.
	 *
	 * @see https://inertiajs.com/server-side-setup#root-template
	 * @param Request $request
	 * @return string
	 */
	public function rootView(Request $request) {
		$app = Str::contains($request->url(), [env('app_dashboard', '')]);
		if ($app) {
			return $this->rootView = 'app';
		}

		return parent::rootView($request);
	}

	/**
	 * Determines the current asset version.
	 *
	 * @see https://inertiajs.com/asset-versioning
	 * @param  \Illuminate\Http\Request  $request
	 * @return string|null
	 */
	public function version(Request $request) {
		return parent::version($request);
	}

	/**
	 * Defines the props that are shared by default.
	 *
	 * @see https://inertiajs.com/shared-data
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function share(Request $request) {
		# Default values
		$app['name'] = config('app.name');
		$app['url'] = config('app.url');
		$app['asset'] = config('app.asset_url');

		# Merge with existing values
		$app = array_merge($app, Inertia::getShared('app', []));

		if ($request->user()) {
			$user['user'] = $request->user()->only(['id']);
			$user['user']['permissions'] =  $request->user()->getAllPermissions()->pluck('name');
		}

		return array_merge(parent::share($request), $user ?? [], [
			'app' => $app,
		]);
	}
}
