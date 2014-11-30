@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

@section('body')
	<h2>Edit Category</h2>

	{{ Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->name]]) }}
		@include('layouts/formcategory', ['submit_text' => 'Edit Category'])
	{{ Form::close() }}
@stop