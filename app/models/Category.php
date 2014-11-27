<?php

class Category extends \Eloquent {
	protected $fillable = ['name','description'];

	public function recipes() 
	{
		return $this->hasMany('Recipe');
	}

}