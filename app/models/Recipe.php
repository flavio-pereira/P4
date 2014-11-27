<?php

class Recipe extends \Eloquent {
	protected $fillable = ['category_id','name','recipe'];

	public function categories()
{
	return $this->belongsTo('Category');
}
}