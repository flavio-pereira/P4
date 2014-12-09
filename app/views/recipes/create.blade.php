@section('body')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">New Recipe for "{{ $category->name }}"</h2>
	</div>

<div class="form-group">
			{{ Form::model(new Recipe, ['route' => ['categories.recipes.store', $category->name], 'class' => 'form-horizontal']) }}
			@include('layouts/formrecipe', ['submit_text' => 'Create Recipe'])
			{{ Form::close() }}
</div>
@stop