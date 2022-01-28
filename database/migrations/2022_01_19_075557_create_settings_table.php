<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('settings', function (Blueprint $table) {
			$table->id();
			$table->string('name', 32);
			$table->string('slug', 32)->nullable();
			$table->foreignId('category_id')->nullable();
			$table->string('value');
			$table->timestamps();

			$table->unique(['name'], 'setting');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('settings');
	}
}
