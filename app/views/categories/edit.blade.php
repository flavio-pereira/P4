@section('main')

<h2>Edit Category</h2>
 
	{{ Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $categories->description]]) }}
		@include('categories/partials/_form', ['submit_text' => 'Edit Category'])
	{{ Form::close() }}

@stop