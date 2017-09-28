{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('Distance', 'Distance:') }}
			{{ Form::text('Distance') }}
		</li>
		<li>
			{{ Form::label('Statut', 'Statut:') }}
			{{ Form::text('Statut') }}
		</li>
		<li>
			{{ Form::label('id_commande', 'Id_commande:') }}
			{{ Form::text('id_commande') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}