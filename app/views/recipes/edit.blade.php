@section('main')
	<h2>Edit Recipe "{{ $recipes->name }}"</h2>
 
	{{ Form::model($recipes, ['method' => 'PATCH', 'route' => ['categories.recipes.update', $categories->description, $recipes->recipe]]) }}
		@include('recipes/partials/_form', ['submit_text' => 'Edit Recipes'])
	{{ Form::close() }}
@stop