@section('head')

	<link rel="icon" type="image/icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

@stop

@section('body')
		<div class="col-sm-10">
			<h4>{{ link_to_route('categories.index', 'Back to Categories') }} |
				{{ link_to_route('categories.recipes.create', 'Create New Recipe', $category->name) }}
			</h4>
		</div>
	<div class="col-sm-10">
	<h2>{{ $category->name }}</h2>
	@if ( !$category->recipes->count() )
		<p>This Category has no recipes.</p>
	</div>
	@else
			@foreach( $category->recipes as $recipe )
			<div class="form-group">
				<div class="col-sm-10">
					<h3><a href="{{ route('categories.recipes.show', [$category->name, $recipe->name]) }}">{{ $recipe->name }}</a></h3>
						{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.recipes.destroy', $category->name, $recipe->name))) }}
						{{ link_to_route('categories.recipes.edit', 'Edit', array($category->name, $recipe->name), array('class' => 'btn btn-info btn-xs')) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
						{{ Form::close() }}
				</div>
			</div>
			@endforeach
	@endif
@stop