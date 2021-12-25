<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	use HasFactory;

	public function getRouteKeyName() {
		return 'slug';
	}

	public function tags() {
		return $this->morphMany(Tag::class, 'tagable')->withTimestamps();
	}

	public function categories() {
		return $this->morphMany(Category::class, 'categorable')->withTimestamps();;
	}
}
