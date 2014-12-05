@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

@section('body')
<div class="container">
    <div class="page-header">
		<h2 class="text-center"> Book: {{ $category->name }} </h2>
		<h3 class="text-center">Recipe: {{ $recipe->name }}</h3>
	</div>
	<div>
	<p class="lead text-justify">{{ $recipe->recipe }}</p>
	</div>
</div>
	<h2 class="text-center">
		{{ link_to_route('categories.show', 'Back to Recipes', $category->name, array('class'=>'btn btn-primary')) }}
		{{ link_to_route('categories.index', 'Back to Books', null, array('class'=>'btn btn-primary')) }}
	</h2>
@stop

