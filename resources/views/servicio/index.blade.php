@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('layouts.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Servicios</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('servicio.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del servicio</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($servicios as $servicio)
					 
						<tr><td>{{$servicio->nombre}}</td>
						<td> <div class="twoColumns col-md-10">
						{!!link_to_route('servicio.edit', $title = 'Modificar', $parameters = $servicio->idServicio, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['servicio.destroy',$servicio->idServicio],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

