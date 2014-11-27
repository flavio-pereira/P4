@section('main')
	

	<h2>{{ $category->name }}</h2>
	@if ( !$category->recipes->count() )
		This Category has no recipes.
	@else
		<ul>
			@foreach( $category->recipes as $recipe )
				<li>
					<a href="{{ route('categories.recipes.show', [$category->name, $recipe->name]) }}">{{ $recipe->name }}</a>
					(
						{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.recipes.destroy', $category->name, $recipe->name))) }}
							{{ link_to_route('categories.recipes.edit', 'Edit', array($category->name, $recipe->name), array('class' => 'btn btn-info')) }},

							{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}
					)
				</li>
			@endforeach
		</ul>
	@endif

	<p>
		{{ link_to_route('categories.index', 'Back to Categories') }} |
		{{ link_to_route('categories.recipes.create', 'Create Recipe', $category->name) }}
	</p>
@stop