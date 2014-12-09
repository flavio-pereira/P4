@extends('layouts/main')

@section('title')
	Log in
@stop

@section('content')
<div class="container">
<div class="page-header">
<h2 class="text-center">Login to your Account</h2>
</div>

{{ Form::open(array('url' => url ('/login'), 'class'=>'form-horizontal', 'role'=>'form')) }}
	<div class="form-group">
    		{{ Form::label('email', 'Email Address:', array('class' => 'control-label col-sm-2', 'for'=>'email')) }}
            <div class="col-sm-3">
    		{{ Form::email('email', null, array('class' => 'form-control', 'placeholder'=>'Enter Email')) }}
    	</div>
    </div>

    <div class="form-group">
    		{{ Form::label('password', 'Password:', array('class' => 'control-label col-sm-2')) }}
            <div class="col-sm-3">
    		{{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Enter Password')) }}
            </div>
    </div>

<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
    		{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
    	</div>
</div>

{{ Form::close() }}
</div>
@stop