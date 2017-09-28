{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_chaussure', 'Id_chaussure:') }}
			{{ Form::text('id_chaussure') }}
		</li>
		<li>
			{{ Form::label('Pointure', 'Pointure:') }}
			{{ Form::text('Pointure') }}
		</li>
		<li>
			{{ Form::label('Stock', 'Stock:') }}
			{{ Form::text('Stock') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}