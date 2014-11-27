<?php

class Category extends \Eloquent {
	protected $fillable = [];

	public function recipes() 
	{
		return $this->hasMany('Recipe');
	}

}