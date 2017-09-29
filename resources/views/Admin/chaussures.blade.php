{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('marque', 'Marque:') !!}
			{!! Form::text('marque') !!}
		</li>
		<li>
			{!! Form::label('couleur', 'Couleur:') !!}
			{!! Form::text('couleur') !!}
		</li>
		<li>
			{!! Form::label('promotion', 'Promotion:') !!}
			{!! Form::text('promotion') !!}
		</li>
		<li>
			{!! Form::label('reduction', 'Reduction:') !!}
			{!! Form::text('reduction') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('modele', 'Modele:') !!}
			{!! Form::text('modele') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}