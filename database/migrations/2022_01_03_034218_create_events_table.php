<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('events', function (Blueprint $table) {
			$table->id();
			$table->string('title', 140);
			$table->string('slug', 140);
			$table->text('description')->nullable();
			$table->timestamps();

			$table->unique(['title', 'created_at'], 'event');
		});

		Schema::create('event_schedules', function (Blueprint $table) {
			$table->id();
			$table->foreignId('event_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->string('subtitle', 140)->nullable();
			$table->string('slug', 140)->nullable();
			$table->text('description')->nullable();
			$table->timestamp('started_at')->nullable();
			$table->timestamp('ended_at')->nullable();
			$table->foreignId('place_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->timestamps();

			$table->unique(['event_id', 'subtitle', 'started_at', 'place_id'], 'schedule');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('event_schedules');
		Schema::dropIfExists('events');
	}
}
