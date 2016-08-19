@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader')
@include ('layouts.scripts')
@include ('dataTables.scriptDataTable7')

<div class="container2">
    
    <div class="banner-data3">

		<h1><center>Lista de Ingresos</center></h1>
        <br>
		  <div class="col-md-10">
		  </div>
		  <div>

		  {!!link_to_route('ingreso.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Fecha</th><th>Hora de ingreso</th><th>Número de identificación</th><th>Tipo de documento</th><th>Tipo de persona</th><th>Nombres</th><th>Apellidos</th><th>Teléfono</th><th>Celular</th><th>Empresa</th><th>Descripción</th><th>Hora de salida</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($ingresos as $ingreso)
					 
						<tr><td>{{$ingreso->fecha}}</td>
						<td>{{$ingreso->horaIngreso}}</td>
						<td>{{$ingreso->personas->numeroIdentificacion}}</td>
						<td>{{$ingreso->personas->tipoDocumentos->nombre}}
						<td>{{$ingreso->personas->tipoPersonas->nombre}}</td>
						<td>{{$ingreso->personas->nombres}}</td>
						<td>{{$ingreso->personas->apellidos}}</td>
						<td>{{$ingreso->personas->telefono}}</td>
						<td>{{$ingreso->personas->celular}}</td>
						<td>{{$ingreso->personas->empresa}}</td>
						<td>{{$ingreso->descripcion}}</td>											
						<td>{{$ingreso->horaSalida}}</td>
						
						<td> <div class="twoColumns">
						{!!link_to_route('ingreso.edit', $title = 'Modificar', $parameters = $ingreso->idIngreso, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['ingreso.destroy',$ingreso->idEvento],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}                         

                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
    </div>
</div>

@stop

