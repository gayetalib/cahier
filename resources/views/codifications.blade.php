{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('idUser', 'IdUser:') !!}
			{!! Form::text('idUser') !!}
		</li>
		<li>
			{!! Form::label('idPav', 'IdPav:') !!}
			{!! Form::text('idPav') !!}
		</li>
		<li>
			{!! Form::label('idChambre', 'IdChambre:') !!}
			{!! Form::text('idChambre') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}