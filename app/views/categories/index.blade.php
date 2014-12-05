@section('body')
<div class="container">
	<div class="page-header">
		<h2 class="text-center">Books</h2>
	</div>
		@if ( !$categories->count() )
		<p class="text-center">You have no books</p>
		<p class="text-center">Before you type your Recipe, you need to create your Recipe's Book!</p>
	@else
			@foreach( $categories as $category )
						<h3><a href="{{ route('categories.show', $category->name) }}">{{ $category->name }}</a>
					    {{ Form::open(array('class' => 'form-horizontal', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->name))) }}
						{{ link_to_route('categories.edit', 'Edit', array($category->name), array('class' => 'btn btn-info btn-xs')) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}
						{{ Form::close() }}</h3>
			@endforeach
	
	@endif
</div>
<h2 class="text-center">{{ link_to_route('categories.create', 'New Book', null, array('class'=>'btn btn-primary')) }}</h2>
@stop