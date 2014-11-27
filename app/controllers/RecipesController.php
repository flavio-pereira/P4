<?php

class RecipesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /recipes
	 *
	 * @return Response
	 */
	public function index(Category $categories)
	{
		$this->layout->content = View::make('recipes.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /recipes/create
	 *
	 * @return Response
	 */
	public function create(Category $categories)
	{
		$this->layout->content = View::make('recipes.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /recipes
	 *
	 * @return Response
	 */
	public function store(Category $categories)
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $categories, Recipe $recipes)
	{
		 $this->layout->content = View::make('recipes.show', compact('categories', 'recipes'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /recipes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Recipe $recipes)
	{
		 $this->layout->content = View::make('recipes.edit', compact('recipes'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $categories, Recipe $recipes)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $categories, Recipe $recipes)
	{
		//
	}

}