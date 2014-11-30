@extends('layouts/main')

@section('title')
	Log in
@stop

@section('content')
<div class="col-sm-10">
<h2>Log in</h2>
</div>

{{ Form::open(array('url' => '/login')) }}
	<div class="form-group">
		<div class="col-sm-10">
    		{{ Form::label('email') }}
    		{{ Form::text('email') }}
    	</div>
    </div>

    <div class="form-group">
    	<div class="col-sm-10">
    		{{ Form::label('password') }}
    		{{ Form::password('password') }}
    	</div>
    </div>

<div class="form-group">
    	<div class="col-sm-10">
    		{{ Form::submit('Submit') }}
    	</div>
</div>

{{ Form::close() }}

@stop