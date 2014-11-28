@section('body')
	<h2>Create a new Recipe for Category "{{ $category->name }}"</h2>

	{{ Form::model(new Recipe, ['route' => ['categories.recipes.store', $category->name]]) }}
		@include('recipes/partials/_form', ['submit_text' => 'Create Recipe'])
	{{ Form::close() }}
@stop