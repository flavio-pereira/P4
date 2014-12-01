@section('head')

	<link rel="icon" type="image/icon" href="../../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">

@stop

@section('body')
	<h2>Edit Recipe "{{ $recipe->name }}"</h2>

	{{ Form::model($recipe, ['method' => 'PATCH', 'route' => ['categories.recipes.update', $category->name, $recipe->name]]) }}
		@include('layouts/formrecipe', ['submit_text' => 'Edit Recipe'])
	{{ Form::close() }}
@stop