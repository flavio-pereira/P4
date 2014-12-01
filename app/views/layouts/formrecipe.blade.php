@section('title')
	Recipe Form
@stop

@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

<div class="form-group">
		<div class="col-sm-10">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</div>
</div>
 
	<div class="form-group">
		<div class="col-sm-10">
			{{ Form::label('recipe', 'Recipe:') }}
			{{ Form::textarea('recipe') }}
		</div>
	</div>
 
	<div class="form-group">
		<div class="col-sm-10">
			{{ Form::submit($submit_text) }}
		</div>
	</div>