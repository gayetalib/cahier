{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('numero', 'Numero:') !!}
			{!! Form::text('numero') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('idPav', 'IdPav:') !!}
			{!! Form::text('idPav') !!}
		</li>
		<li>
			{!! Form::label('nbEtu', 'NbEtu:') !!}
			{!! Form::text('nbEtu') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}