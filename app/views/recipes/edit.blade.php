@section('head')

	<link rel="icon" type="image/icon" href="../../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">

@stop

@section('body')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">Edit Recipe "{{ $recipe->name }}"</h2>
    </div>
	{{ Form::model($recipe, ['method' => 'PATCH', 'route' => ['categories.recipes.update', $category->name, $recipe->name], 'class' => 'form-horizontal']) }}
		@include('layouts/formrecipe', ['submit_text' => 'Edit Recipe'])
	{{ Form::close() }}
</div>
@stop