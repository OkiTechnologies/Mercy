<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('menus', function (Blueprint $table) {
			$table->id();
			$table->foreignId('parent')->nullable()->constrained('menus')->cascadeOnUpdate()->cascadeOnDelete();
			$table->string('name', 32)->unique('menu_name');
			$table->string('slug', 32)->nullable();
			$table->json('params');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('menus');
	}
}
