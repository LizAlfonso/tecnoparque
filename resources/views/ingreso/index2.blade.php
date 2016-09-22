@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@if( Auth::user()->rols->nombre == "Dinamizador") 
	@include ('dataTables.scriptDataTable9')
	@else
		@include ('dataTables.scriptDataTable10')
@endif

<div class="container2">
    
    <div class="banner-data3">

		<h1><center>Lista de Ingresos</center></h1>
        <br>
		  <div class="col-md-10">
		  </div>
		  <div>

		  @if( Auth::user()->rols->nombre != "Dinamizador")

		  {!!link_to_route('ingreso.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}

		  @endif
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Fecha</th><th>Hora de ingreso</th><th>Número de identificación</th><th>Tipo de persona</th><th>Nombres</th><th>Apellidos</th><th>Correo electrónico</th><th>Descripción</th><th>Hora de salida</th>

				@if( Auth::user()->rols->nombre != "Dinamizador") 
				<th>Operación</th></tr>
				@endif


				</thead>

				 <tbody>

					@foreach($ingresos as $ingreso)
					 
						<tr><td>{{$ingreso->fecha}}</td>
						<td>{{$ingreso->horaIngreso}}</td>
						<td>{{$ingreso->personas->numeroIdentificacion}}</td>
						<td>{{$ingreso->personas->tipoPersonas->nombre}}</td>
						<td>{{$ingreso->personas->nombres}}</td>
						<td>{{$ingreso->personas->apellidos}}</td>
						<td>{{$ingreso->personas->correo}}</td>
						<td>{{$ingreso->descripcion}}</td>											
						<td>{{$ingreso->horaSalida}}</td>
						
						@if( Auth::user()->rols->nombre != "Dinamizador") 
							<td> <div>
							{!!link_to_route('ingreso.edit', $title = 'Modificar', $parameters = $ingreso->idIngreso, $attributes = ['class'=>'btn btn-success'])!!}                      

                        	</div></td>
                        @endif

                        </tr>
					  
					@endforeach

				</tbody>

			</table>
    </div>
</div>

@stop

