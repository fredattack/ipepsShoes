{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('quantite', 'Quantite:') !!}
			{!! Form::text('quantite') !!}
		</li>
		<li>
			{!! Form::label('id_commande', 'Id_commande:') !!}
			{!! Form::text('id_commande') !!}
		</li>
		<li>
			{!! Form::label('taille', 'Taille:') !!}
			{!! Form::text('taille') !!}
		</li>
		<li>
			{!! Form::label('id_chaussure', 'Id_chaussure:') !!}
			{!! Form::text('id_chaussure') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}