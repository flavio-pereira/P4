<?php

class Recipe extends \Eloquent {
	protected $fillable = [];

	public function categories()
{
	return $this->belongsTo('Category');
}
}