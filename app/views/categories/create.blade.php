@section('main')

<h2>Create a new Category</h2>
 
	{{ Form::model(new Category, ['route' => ['categories.store']]) }}
		@include('categories/partials/_form', ['submit_text' => 'Create Category'])
	{{ Form::close() }}
@stop

@stop