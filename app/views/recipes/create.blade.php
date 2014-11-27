@section('main')
	<h2>Create Recipe for Category "{{ $categories->name }}"</h2>
 
	{{ Form::model(new Recipe, ['route' => ['categories.recipes.store', $categories->description]]) }}
		@include('recipes/partials/_form', ['submit_text' => 'Create Recipes'])
	{{ Form::close() }}
@stop