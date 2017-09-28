{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Nom', 'Nom:') }}
			{{ Form::text('Nom') }}
		</li>
		<li>
			{{ Form::label('Prenom', 'Prenom:') }}
			{{ Form::text('Prenom') }}
		</li>
		<li>
			{{ Form::label('Email', 'Email:') }}
			{{ Form::text('Email') }}
		</li>
		<li>
			{{ Form::label('Adresse', 'Adresse:') }}
			{{ Form::text('Adresse') }}
		</li>
		<li>
			{{ Form::label('Localite', 'Localite:') }}
			{{ Form::text('Localite') }}
		</li>
		<li>
			{{ Form::label('Niveau', 'Niveau:') }}
			{{ Form::text('Niveau') }}
		</li>
		<li>
			{{ Form::label('Email_confirmation', 'Email_confirmation:') }}
			{{ Form::text('Email_confirmation') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}