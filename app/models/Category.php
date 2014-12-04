<?php

class Category extends \LaravelBook\Ardent\Ardent {

	public static $rules = array(
		'name'			=> 'required|min:2',
		'description'	=> 'required',
	);

	protected $fillable = ['user_id','name','description'];

	public function recipes() 
	{
		return $this->hasMany('Recipe')->where('user_id','=', Auth::user()->id);
	}

}