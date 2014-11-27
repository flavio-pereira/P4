@section('main')
	<h2>Edit Recipe "{{ $recipe->name }}"</h2>

	{{ Form::model($recipe, ['method' => 'PATCH', 'route' => ['categories.recipes.update', $category->name, $recipe->name]]) }}
		@include('recipes/partials/_form', ['submit_text' => 'Edit Recipe'])
	{{ Form::close() }}
@stop