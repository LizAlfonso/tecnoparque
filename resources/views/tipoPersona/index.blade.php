@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('dataTables.scriptDataTable2')

<div class="container">

	<div class="banner-data">

		<h1><center>Lista de Tipos de persona</center></h1>
		<br>

		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('tipoPersona.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del tipo de persona</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($tipo_personas as $tipoPersona)
					 
						<tr><td>{{$tipoPersona->nombre}}</td>
						<td> <div class="twoColumns col-md-10">
						{!!link_to_route('tipoPersona.edit', $title = 'Modificar', $parameters = $tipoPersona->idTipoPersona, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['tipoPersona.destroy',$tipoPersona->idTipoPersona],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

