@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

<div class="container">

	<div class="banner-list">

		<h1><center>Lista de Eventos</center></h1>

		  <div class="col-md-10">
		  </div>
		  <div>

		  {!!link_to_route('evento.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del evento</th><th>Fecha del evento</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($eventos as $evento)
					 
						<tr><td>{{$evento->nombre}}</td>
						<td>{{$evento->fecha}}</td>
						<td> <div class="twoColumns col-md-10">
						{!!link_to_route('evento.edit', $title = 'Modificar', $parameters = $evento->idEvento, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['evento.destroy',$evento->idEvento],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

