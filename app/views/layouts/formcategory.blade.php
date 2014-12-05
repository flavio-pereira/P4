@section('title')
	Book
@stop

@section('head')

	<link rel="icon" type="image/icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

@stop
		<div class="form-group">
			{{ Form::label('name', 'Recipe book Name:', array('class' => 'control-label col-sm-2', 'for'=>'name')) }}
			<div class="col-sm-3">
				{{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Ex.: Desserts Book')) }}
			</div>
		</div>
	
		<div class="form-group">
			{{ Form::label('description', 'Description:', array('class' => 'control-label col-sm-2')) }}
			<div class="col-sm-3">
				{{ Form::text('description', null, array('class' => 'form-control')) }}
			</div>
		</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		{{ Form::submit($submit_text, array('class' => 'btn btn-default')) }}
		</div>
	</div>
	

