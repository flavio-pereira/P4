@section('body')
	<div class="col-sm-10">
		<h2>Create a new Recipe for Category "{{ $category->name }}"</h2>
	</div>

<div class="form-group">
		<div class="col-sm-10">
			{{ Form::model(new Recipe, ['route' => ['categories.recipes.store', $category->name]]) }}
			@include('layouts/formrecipe', ['submit_text' => 'Create Recipe'])
			{{ Form::close() }}
		</div>
</div>
@stop