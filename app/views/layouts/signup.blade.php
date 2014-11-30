@extends('layouts/main')

@section('title')
	Register
@stop

@section('content')
<div class="col-sm-10">
<h2>Sign up</h2>
</div>

{{ Form::open(array('url' => '/signup')) }}
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
    		<small>Min 6 characters</small>
    	</div>
</div>
<div class="form-group">
		<div class="col-sm-10">
    		{{ Form::submit('Submit') }}
    	</div>
</div>

{{ Form::close() }}
@stop