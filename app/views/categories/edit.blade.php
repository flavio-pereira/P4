@section('main')
<br />
<br />
	<h2>Edit Category</h2>

	{{ Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->name]]) }}
		@include('categories/partials/_form', ['submit_text' => 'Edit Category'])
	{{ Form::close() }}
@stop