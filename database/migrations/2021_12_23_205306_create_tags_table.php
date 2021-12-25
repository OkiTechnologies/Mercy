<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tags', function (Blueprint $table) {
			$table->id();
			$table->string('name', 32);
			$table->string('slug', 32);
			$table->timestamps();

			$table->unique(['name'], 'tag');
		});

		Schema::create('tagables', function (Blueprint $table) {
			$table->id();
			$table->foreignId('tag_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
			$table->morphs('tagable');
			$table->timestamps();

			$table->unique(['tag_id', 'tagable_type', 'tagable_id'], 'tagable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tagables');
		Schema::dropIfExists('tags');
	}
}
