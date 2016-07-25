@extends('layouts.headerFooter')

@include ('layouts.menuHeader')

@section('content')

@include ('layouts.scripts')
@include ('dataTables.scriptDataTable11')

<div class="container">

    <div class="banner-data3">

		<h1><center>Lista de Asistencia</center></h1>

		  <div class="col-md-10">
		  </div>
		  <div>
          {!!link_to_route('asistencia.create', $title = 'Añadir asistente',null,$attributes = ['class'=>'btn btn-primary'])!!}
          </div>
          <br>

			<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Número de identificación</th><th>Tipo de documento</th><th>Tipo de persona</th><th>Nombres</th><th>Apellidos</th><th>Género</th><th>Correo electrónico</th><th>Teléfono</th><th>Celular</th><th>Empresa</th><th>Responsable del Evento</th><th>Operación</th></tr>

				</thead>

				 <tbody>
				 
						@foreach ($evento->personas as $asistente)

						 	<tr><td>{{$asistente->numeroIdentificacion}}</td>
						 	<td>{{$asistente->tipoDocumentos->nombre}}</td>
						 	<td>{{$asistente->tipoPersonas->nombre}}</td>
							<td>{{$asistente->nombres}}</td>
							<td>{{$asistente->apellidos}}</td>
							<td>					
								@if($asistente->genero== 1)
								Femenino
								@elseif($asistente->genero==2)
								Masculino
								@endif	
							</td>
							<td>{{$asistente->correo}}</td>
							<td>{{$asistente->telefono}}</td>
							<td>{{$asistente->celular}}</td>
							<td>{{$asistente->empresa}}</td>
							<td>
								@if($asistente->pivot->responsable== 0)
								No
								@else
								Sí
								@endif
							</td>

							<td> <div class="twoColumns">
							{!!link_to_route('asistencia.edit', $title = 'Modificar', $parameters = $asistente->idDetEventoPersona, $attributes = ['class'=>'btn btn-success'])!!}					
							{!!Form::open(['route'=> ['asistencia.destroy',$asistente->idPersona],'method'=>'DELETE'])!!}
			           	    {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        	{!!Form::close()!!}                         
                        	</div></td></tr>

						@endforeach

				</tbody>

			</table>

	</div>

</div>

@stop


