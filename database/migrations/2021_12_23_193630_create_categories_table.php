<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('categories', function (Blueprint $table) {
			$table->id();
			$table->foreignId('parent')->nullable()->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
			$table->string('name', 32);
			$table->string('slug', 32);
			$table->integer('level')->nullable();
			$table->timestamps();

			$table->unique(['parent', 'name'], 'category');
		});

		Schema::create('categorables', function (Blueprint $table) {
			$table->id();
			$table->foreignId('category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
			$table->morphs('categorable');
			$table->timestamps();

			$table->unique(['category_id', 'categorable_type', 'categorable_id'], 'categorable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::disableForeignKeyConstraints();
		Schema::dropIfExists('categorables');
		Schema::dropIfExists('categories');
	}
}
