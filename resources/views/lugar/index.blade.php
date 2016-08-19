@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader') 
@include ('layouts.scripts')
@include ('dataTables.scriptDataTable2')

<div class="container">

	<div class="banner-data4">

		<h1><center>Lista de Lugares</center></h1>
          <br>
          
		  <div class="col-md-9">
		  </div>
		  <div>

		  {!!link_to_route('lugar.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
          
          </div>
          <br>

		  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre del lugar</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($lugares as $lugar)
					 
						<tr><td>{{$lugar->nombre}}</td>
						<td> <div class="twoColumns">
						{!!link_to_route('lugar.edit', $title = 'Modificar', $parameters = $lugar->idLugar, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['lugar.destroy',$lugar->idLugar],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop

