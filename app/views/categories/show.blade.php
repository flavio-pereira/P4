@section('main')

	<h2>{{ $categories->name }}</h2>
	@if ( !$categories->recipes->count() )
		Your Categories has no recipes.
	@else
		<ul>
			@foreach( $categories->recipes as $recipes )
				<li>
				
				<a href="{{ route('categories.recipes.show', [$categories->description, $recipes->name]) }}">{{ $recipes->name }}</a>

				(
						{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.recipes.destroy', $categories->description, $recipes->name))) }}
							{{ link_to_route('categories.recipes.edit', 'Edit', array($categories->description, $recipes->name), array('class' => 'btn btn-info')) }},
 
							{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}
					)
				</li>
			@endforeach
		</ul>
	@endif
	<p>
		{{ link_to_route('categories.index', 'Back to Categories') }} |
		{{ link_to_route('categories.recipes.create', 'Create Recipe', $categories->description) }}
	</p>

@stop