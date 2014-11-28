<?php

class Category extends \LaravelBook\Ardent\Ardent {

	public static $rules = array(
		'name'			=> 'required|min:3',
		'description'	=> 'required',
	);

	protected $fillable = ['name','description'];

	public function recipes() 
	{
		return $this->hasMany('Recipe');
	}

}