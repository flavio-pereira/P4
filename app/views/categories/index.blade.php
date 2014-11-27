@section('main')

<br />
<br />

<h2>Categories</h2>
	@if ( !$categories->count() )
		You have no categories
	@else
		<ul>
			@foreach( $categories as $categories )
				<li>
					<a href="{{ route('categories.show', $categories->description) }}">{{ $categories->name }}</a>
					(
						{{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $categories->description))) }}
							{{ link_to_route('categories.edit', 'Edit', array($categories->description), array('class' => 'btn btn-info')) }},
 
							{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}
					)
				</li>
			@endforeach
		</ul>
	@endif

	<p>{{ link_to_route('categories.create', 'Create new Category') }}</p>


@stop