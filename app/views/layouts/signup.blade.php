@extends('layouts/main')

@section('title')
	Register
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h2 class="text-center">Welcome to My Recipe Book</h2>
    </div>

    {{ Form::open(array('url' => ('/signup'), 'class'=>'form-horizontal', 'role'=>'form')) }}
    <div class="form-group">
            {{ Form::label('Name', 'Name:', array('class' => 'control-label col-sm-2', 'for'=>'name')) }}
            <div class="col-sm-3">
                {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Enter Your Name')) }}
            </div>
    </div>
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
    		  <small>Min 6 characters</small>
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