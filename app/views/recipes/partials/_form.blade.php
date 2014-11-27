<ul>
	<li>
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name') }}
	</li>
 
	<li>
		{{ Form::label('recipe', 'Recipe:') }}
		{{ Form::textarea('recipe') }}
	</li>
 
	<li>
		{{ Form::submit($submit_text) }}
	</li>
</ul>