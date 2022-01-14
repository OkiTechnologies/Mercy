<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var string[]
	 */
	protected $fillable = [
		'title', 'slug', 'description',
	];

	function venues() {
		// code
	}

	function timelines() {
		return $this->morphMany(Timeline::class, 'timeable');
	}
}
