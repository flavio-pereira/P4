<?php

class RecipesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /recipes
	 *
	 * @return Response
	 */
	public function index(Category $category)
	{
		$this->layout->content = View::make('recipes.index', compact('category'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /recipes/create
	 *
	 * @return Response
	 */
	public function create(Category $category)
	{
		$this->layout->content = View::make('recipes.create', compact('category'));
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /recipes
	 *
	 * @return Response
	 */
	public function store(Category $category)
	{
		$input = Input::all();
		$recipe = new Recipe();
		$recipe->name = $input['name'];
		$recipe->recipe = $input['recipe'];
		$recipe->user_id = Auth::user()->id;
		$recipe->category_id = $category->id;
		
		if ( $recipe->save() )
			return Redirect::route('categories.show', $category->name)->with('message', 'Recipe created.');
		else
			return Redirect::route('categories.recipes.create', $category->name)->withInput()->withErrors( $recipe->errors() );
	}

	/**
	 * Display the specified resource.
	 * GET /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category, Recipe $recipe)
	{

		$this->layout->content = View::make('recipes.show', compact('category', 'recipe'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /recipes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category, Recipe $recipe)
	{
		$this->layout->content = View::make('recipes.edit', compact('category', 'recipe'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $category, Recipe $recipe)
	{
		$input = Input::all();
		$recipe->fill($input);
 
		if ( $recipe->updateUniques() )
			return Redirect::route('categories.recipes.show', [$category->name, $recipe->name])->with('message', 'Recipe updated.');
		else
			return Redirect::route('categories.recipes.edit', [$category->name, array_get($recipe->getOriginal(), 'name')])->withInput()->withErrors( $recipe->errors() );
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /recipes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category, Recipe $recipe)
	{
		$recipe->delete();
		return Redirect::route('categories.show', $category->name)->with('message', 'Recipe deleted.');
	}

}