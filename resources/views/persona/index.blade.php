@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

@include ('layouts.scripts')
@include ('layouts.scriptDataTable11')

<div class="container">

    <div class="banner-data3">

		<h1><center>Lista de Personas</center></h1>
        <br>

		  <div class="col-md-10">
		  </div>
		  
		  <div>

		  {!!link_to_route('persona.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Número de identificación</th><th>Tipo de documento</th><th>Tipo de persona</th><th>Nombres</th><th>Apellidos</th><th>Género</th><th>Correo electrónico</th><th>Teléfono</th><th>Celular</th><th>Empresa</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($personas as $persona)
					 
						<tr><td>{{$persona->numeroIdentificacion}}</td>
						<td>{{$persona->tipoDocumentos->nombre}}</td>
						<td>{{$persona->tipoPersonas->nombre}}</td>
						<td>{{$persona->nombres}}</td>
						<td>{{$persona->apellidos}}</td>
						<td>
						 @if($persona->genero== 1)
						 Femenino
						 @elseif($persona->genero==2)
						 Masculino
						 @endif						
						</td>
						<td>{{$persona->correo}}</td>
						<td>{{$persona->telefono}}</td>
						<td>{{$persona->celular}}</td>
						<td>{{$persona->empresa}}</td>
						
						<td> <div class="twoColumns">
						{!!link_to_route('persona.edit', $title = 'Modificar', $parameters = $persona->idPersona, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['persona.destroy',$persona->idPersona],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}                         
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
    </div>
</div>

@stop

