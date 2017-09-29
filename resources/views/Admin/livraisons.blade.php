{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('distance', 'Distance:') !!}
			{!! Form::text('distance') !!}
		</li>
		<li>
			{!! Form::label('statut', 'Statut:') !!}
			{!! Form::text('statut') !!}
		</li>
		<li>
			{!! Form::label('id_commande', 'Id_commande:') !!}
			{!! Form::text('id_commande') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}