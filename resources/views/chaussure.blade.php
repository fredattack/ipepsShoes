{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Marque', 'Marque:') }}
			{{ Form::text('Marque') }}
		</li>
		<li>
			{{ Form::label('Couleur', 'Couleur:') }}
			{{ Form::text('Couleur') }}
		</li>
		<li>
			{{ Form::label('Promotion', 'Promotion:') }}
			{{ Form::text('Promotion') }}
		</li>
		<li>
			{{ Form::label('Reduction', 'Reduction:') }}
			{{ Form::text('Reduction') }}
		</li>
		<li>
			{{ Form::label('Sexe', 'Sexe:') }}
			{{ Form::text('Sexe') }}
		</li>
		<li>
			{{ Form::label('Type', 'Type:') }}
			{{ Form::text('Type') }}
		</li>
		<li>
			{{ Form::label('Modele', 'Modele:') }}
			{{ Form::text('Modele') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}