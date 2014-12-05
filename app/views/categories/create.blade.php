@section('body')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">Create your Recipe Book</h2>
    </div>
	{{ Form::model(new Category, ['route' => ['categories.store']]) }}
		@include('layouts/formcategory', ['submit_text' => 'Create Book'])
	{{ Form::close() }}
</div>
@stop