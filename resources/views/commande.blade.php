{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_user', 'Id_user:') }}
			{{ Form::text('id_user') }}
		</li>
		<li>
			{{ Form::label('id_livraison', 'Id_livraison:') }}
			{{ Form::text('id_livraison') }}
		</li>
		<li>
			{{ Form::label('Montant', 'Montant:') }}
			{{ Form::text('Montant') }}
		</li>
		<li>
			{{ Form::label('Montant_livraison', 'Montant_livraison:') }}
			{{ Form::text('Montant_livraison') }}
		</li>
		<li>
			{{ Form::label('Payer', 'Payer:') }}
			{{ Form::text('Payer') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}