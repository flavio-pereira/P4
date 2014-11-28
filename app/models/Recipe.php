<?php

class Recipe extends \LaravelBook\Ardent\Ardent {

	public static $rules = array(
		'name'			=> 'required|min:4',
		'recipe'		=> 'required',
	);


	protected $fillable = ['category_id','name','recipe'];

	public function categories()
{
	return $this->belongsTo('Category');
}
}