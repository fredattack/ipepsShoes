{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_user', 'Id_user:') !!}
			{!! Form::text('id_user') !!}
		</li>
		<li>
			{!! Form::label('id_livraison', 'Id_livraison:') !!}
			{!! Form::text('id_livraison') !!}
		</li>
		<li>
			{!! Form::label('montant', 'Montant:') !!}
			{!! Form::text('montant') !!}
		</li>
		<li>
			{!! Form::label('montant_livraison', 'Montant_livraison:') !!}
			{!! Form::text('montant_livraison') !!}
		</li>
		<li>
			{!! Form::label('payer', 'Payer:') !!}
			{!! Form::text('payer') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}