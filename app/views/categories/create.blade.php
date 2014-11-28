@section('body')
	<h2>Create Category</h2>

	{{ Form::model(new Category, ['route' => ['categories.store']]) }}
		@include('categories/partials/_form', ['submit_text' => 'Create Category'])
	{{ Form::close() }}
@stop