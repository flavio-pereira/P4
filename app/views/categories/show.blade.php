@section('head')

	<link rel="icon" type="image/icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

@stop

@section('body')
<div class="container">
    <div class="page-header">
		<h2 class="text-center">{{ $category->name }}</h2>
	</div>
			@if ( !$category->recipes->count() )
			<p class="text-center">This Recipe Book has no Recipes.</p>
	@else
		<div class="form-group">
			@foreach( $category->recipes as $recipe )
					<h3><a href="{{ route('categories.recipes.show', [$category->name, $recipe->name]) }}">{{ $recipe->name }}</a>
						{{ Form::open(array('class' => 'form-horizontal', 'method' => 'DELETE', 'route' => array('categories.recipes.destroy', $category->name, $recipe->name))) }}
						{{ link_to_route('categories.recipes.edit', 'Edit', array($category->name, $recipe->name), array('class' => 'btn btn-info btn-xs')) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
						{{ Form::close() }}</h3>
		</div>
			@endforeach
	@endif
</div>

	<h2 class="text-center">
		{{ link_to_route('categories.recipes.create', 'Create New Recipe', $category->name, array('class'=>'btn btn-primary')) }}
		{{ link_to_route('categories.index', 'Back to Books', null, array('class'=>'btn btn-primary')) }}
	</h2>
@stop


