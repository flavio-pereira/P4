@section('body')
<p>Here you can see your catergories. If you don't have any, go ahead and create your category: {{ link_to_route('categories.create', 'Create a new Category') }} </p>
<div class="col-sm-10">
	<h2>Categories</h2>
	@if ( !$categories->count() )
		<p>You have no categories</p>
</div>
	@else
			@foreach( $categories as $category )
				<div class="col-sm-10">
						<h3><a href="{{ route('categories.show', $category->name) }}">{{ $category->name }}</a> </h3>
					    {{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->name))) }}
						{{ link_to_route('categories.edit', 'Edit', array($category->name), array('class' => 'btn btn-info btn-xs')) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
						{{ Form::close() }}
				</div>
			@endforeach
	@endif
@stop