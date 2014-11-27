<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('layouts.home');
});



/* Debug Route */
Route::get('/debug', 'DebugController@getDebug');

/* User route */   
Route::resource('users', 'UsersController');


Route::bind('recipes', function($value, $route) {
	return Recipe::whereName($value)->first();
});
Route::bind('categories', function($value, $route) {
	return Category::whereName($value)->first();
});

Route::resource('categories', 'CategoriesController');
Route::resource('categories.recipes', 'RecipesController');

