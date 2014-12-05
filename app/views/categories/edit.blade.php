@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

@section('body')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">Edit your Book</h2>
     </div>
	{{ Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->name]]) }}
		@include('layouts/formcategory', ['submit_text' => 'Edit Category'])
	{{ Form::close() }}
</div>
@stop