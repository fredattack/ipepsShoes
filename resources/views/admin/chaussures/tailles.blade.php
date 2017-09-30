{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_chaussure', 'Id_chaussure:') !!}
			{!! Form::text('id_chaussure') !!}
		</li>
		<li>
			{!! Form::label('pointure', 'Pointure:') !!}
			{!! Form::text('pointure') !!}
		</li>
		<li>
			{!! Form::label('stock', 'Stock:') !!}
			{!! Form::text('stock') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}