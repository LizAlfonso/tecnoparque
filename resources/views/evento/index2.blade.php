@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader')
@include ('layouts.scripts')
@include ('dataTables.scriptDataTable8')

<div class="container">

    <div class="banner-data3">

		<h1><center>Lista de Eventos</center></h1>

		  <div class="col-md-10">
		  </div>
		  <div>

		  @if( Auth::user()->rols->nombre != "Dinamizador")  

		  {!!link_to_route('evento.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}

		  @endif
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

			<thead>
				<tr>
					<th>Nombre del evento</th>
					<th>Servicio</th>
					<th>Fecha del evento</th>
					<th>Hora del evento</th>
					<th>Lugar</th>
					<th>Cupos</th>
					<th>Descripción</th>
					<th>Operación</th>
				</tr>
			</thead>

			<tbody>
			@foreach($eventos as $evento)
				<tr>
					<td>{{$evento->nombre}}</td>
					<td>{{$evento->servicios->nombre}}</td>
					<td>{{$evento->fecha}}</td>
					<td>{{$evento->hora}}</td>
					<td>{{$evento->lugar}} de Tecnoparque  
					@if($evento->lugarEspecifico)
						: {{$evento->lugarEspecifico}}						
					@endif
					@if($evento->idLugar)
						: {{$evento->lugars->nombre}}
					@endif
					</td>					
					<td>{{$evento->cupos}}</td>
					<td>{{$evento->descripcion}}</td>
					<td> 
						<div>                    
							{!!link_to_route('asistencia.index', $title = 'Lista asistentes', $parameters = $evento->idEvento, $attributes = ['class'=>'btn btn-info'])!!}
						</div>
					</td>
				</tr>
			@endforeach
			</tbody>

			</table>

	</div>

</div>

@stop

