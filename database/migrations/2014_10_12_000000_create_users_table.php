<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->boolean('active')->default(1)->nullable();
			$table->string('first_name', 16);
			$table->string('middle_name', 16)->nullable();
			$table->string('last_name', 16);
			$table->string('username', 16)->unique('username')->nullable();
			$table->date('date_of_birth')->nullable();
			$table->enum('gender', ['female', 'male', 'others'])->nullable();
			$table->string('phone', 14)->unique();
			$table->string('email', 64)->nullable()->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->rememberToken();
			$table->string('api_token', 64)->unique()->nullable();
			$table->foreignId('current_team_id')->nullable();
			$table->text('profile_photo_path')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
