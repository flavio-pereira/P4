<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();
		$this->layout->content = View::make('categories.index', compact('categories'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	
	public function store()
	{
		$input = Input::all();
		Category::create( $input );
		return Redirect::route('categories.index')->with('message', 'Category created');
	}


	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category)
	{
		$this->layout->content = View::make('categories.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category)
	{
		$this->layout->content = View::make('categories.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $category)
	{
		$input = array_except(Input::all(), '_method');
		$category->update($input);
		return Redirect::route('categories.show', $category->name)->with('message', 'Category updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category)
	{
		$category->delete();
		return Redirect::route('categories.index')->with('message', 'Category deleted.');
	}


}