@section('title')
	Recipe Form
@stop

@section('head')

	<link rel="icon" type="image/icon" href="../../../images/favicon.ico">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

@stop

	<div class="form-group">
			{{ Form::label('name', 'Recipe Name:', array('class' => 'control-label col-sm-2', 'for'=>'name')) }}
		<div class="col-sm-3">
			{{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Ex.: Chocolate Cake')) }}
		</div>
	</div>
 
	<div class="form-group">
			{{ Form::label('recipe', 'Recipe:', array('class' => 'control-label col-sm-2')) }}
		<div class="col-sm-3">
			{{ Form::textarea('recipe', null, array('class' => 'form-control')) }}
		</div>
	</div>
 
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		{{ Form::submit($submit_text, array('class' => 'btn btn-default')) }}
		</div>
	</div>