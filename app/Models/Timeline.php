<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model {
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var string[]
	 */
	protected $fillable = [
		'timeable_type', 'timeable_id', 'venue_id', 'title', 'subtitle', 'slug', 'description',
		'started_at', 'ended_at', 'repeat', 'interval', 'tags'
	];

	function timeable() {
		return $this->morphTo();
	}
}
