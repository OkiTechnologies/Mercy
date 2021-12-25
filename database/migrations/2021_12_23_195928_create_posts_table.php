<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->string('title', 128);
			$table->string('subtitle', 64)->nullable();
			$table->string('slug', 128);
			$table->longText('body');
			$table->boolean('status')->nullable();
			$table->foreignId('posted_by')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
			$table->string('image')->nullable();
			// $table->integer('like')->nullable();
			// $table->integer('dislike')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('posts');
	}
}
