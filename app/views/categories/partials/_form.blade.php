{{ HTML::style('css/bootstrap.min.css'); }} 

<ul>
	<li>
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}
	</li>
 
	<li>
		{{ Form::label('description', 'Description:') }}
		{{ Form::text('description') }}
	</li>
 
	<li>
		{{ Form::submit($submit_text) }}
	</li>
</ul>