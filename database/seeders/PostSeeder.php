<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$posts = [
			[
				'title' => 'Psalm 23:1',
				'slug' => 'psalm-23-1',
				'body' => 'THE Lord is my Shepherd, I shall not lack.',
				'posted_by' => 1,
			]
		];

		foreach ($posts as $post) {
			$exists = Post::where('title', $post['title'])->count();
			if (!$exists) {
				Post::create($post);
			}
		}
	}
}
