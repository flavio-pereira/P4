@section('body')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">Create your Recipe Book</h2>
    </div>

    <div class="form-group">
			{{ Form::model(new Category, ['route' => 'categories.store', 'class' => 'form-horizontal']) }}
				@include('layouts/formcategory', ['submit_text' => 'Create Book'])
			{{ Form::close() }}
	</div>
@stop