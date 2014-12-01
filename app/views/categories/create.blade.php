@section('body')
	<h2>Create Category</h2>

	<p> Here you can create the category where your recipe will be located. You can create a category called Pie and then all the recipes related with Pie will be under that Category.</p>

	{{ Form::model(new Category, ['route' => ['categories.store']]) }}
		@include('layouts/formcategory', ['submit_text' => 'Create Category'])
	{{ Form::close() }}
@stop