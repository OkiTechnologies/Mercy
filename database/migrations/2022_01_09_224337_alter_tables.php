<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTables extends Migration {

	public $table = "events";

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table($this->table, function (Blueprint $table) {
			//$table->
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table($this->table, function (Blueprint $table) {
			// $table->dropColumn(['started_at', 'ended_at']);
		});
	}
}
