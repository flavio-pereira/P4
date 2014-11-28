@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

@section('body')
	<h2> Category: {{ $category->name }} </h2>
	<h3>Recipe: {{ $recipe->name }}</h3>
	
	<div>
	<p>{{ $recipe->recipe }}</p>
	</div>
	
	<p>
		{{ link_to_route('categories.index', 'Back to Categories') }} |
		{{ link_to_route('categories.show', 'Back to Recipes', $category->name) }}
	</p>
@stop