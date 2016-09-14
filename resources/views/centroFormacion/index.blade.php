@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('dataTables.scriptDataTable2')

<div class="container">

	<div class="banner-data4">

		<h1><center>Lista de Centros de formación</center></h1>
		  <br>
		  
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('centroFormacion.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del centro</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($centro_formacions as $centroFormacion)
					 
						<tr><td>{{$centroFormacion->nombre}}</td>
						<td> <div class="twoColumns">
						{!!link_to_route('centroFormacion.edit', $title = 'Modificar', $parameters = $centroFormacion->idCentroFormacion, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['centroFormacion.destroy',$centroFormacion->idCentroFormacion],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

