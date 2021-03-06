<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('timelines', function (Blueprint $table) {
			$table->id();
			$table->morphs('timeable');
			$table->foreignId('venue_id')->constrained('places')->cascadeOnUpdate()->cascadeOnDelete();
			$table->string('title', 140);
			$table->string('subtitle', 140)->nullable();
			$table->string('slug');
			$table->text('description')->nullable();
			$table->date('started_date');
			$table->time('started_time');
			$table->date('ended_date')->nullable();
			$table->time('ended_time')->nullable();
			$table->enum('repeat', ['day', 'week', 'month', 'year'])->nullable();
			$table->integer('interval')->nullable()->default(0);
			$table->json('tags')->nullable();
			$table->timestamps();

			$table->unique(['timeable_type', 'timeable_id', 'venue_id', 'title', 'started_date', 'started_time'], 'timeline');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('timelines');
	}
}
