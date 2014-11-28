@section('body')
	<h2>Categories</h2>
	@if ( !$categories->count() )
		You have no categories
	@else
		<ul>
			@foreach( $categories as $category )
				<li>
					<a href="{{ route('categories.show', $category->name) }}">{{ $category->name }}</a> 
					    {{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->name))) }}
						{{ link_to_route('categories.edit', 'Edit', array($category->name), array('class' => 'btn btn-info btn-xs')) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
						{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	@endif

	<p>{{ link_to_route('categories.create', 'Create a new Category') }}</p>
@stop