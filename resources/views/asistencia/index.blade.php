@extends('layouts.headerFooter')

@include ('layouts.menuHeader')

@section('content')

@include ('layouts.scripts')
@include ('dataTables.scriptDataTable11')

<div class="container">

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="myModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Buscar persona</h4>
				</div>
				<div class="modal-body">
					<table id="dataTablePersona" class="table table-bordered">
						<thead>
							<tr>
								<th>Número de identificación</th>
								<th>Tipo de documento</th>
								<th>Tipo de persona</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Género</th>
								<th>Correo electrónico</th>
								<th>Teléfono</th>
								<th>Celular</th>
								<th>Empresa</th>
								<th>Responsable del Evento</th>
								<th>Operación</th>
							</tr>
						</thead>

						<tbody>
							@foreach($personas as $persona)
								<tr>
									<td>{{$persona->numeroIdentificacion}}</td>
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
									<td></td>
									<td> 														
										<button type="button" class="btn btn-warning" data-dismiss="modal">Agregar</button>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>					
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<br>

	<h1><center>Lista de Asistencia del evento {{$evento->nombre}}, {{$evento->fecha}}</center></h1>

	<div>{!!Form::button('Agregar asistente', ['id'=>'btn', 'class'=>'btn btn-primary', 'data-toggle'=>'modal', 'data-target'=>'#myModal'])!!}</div>

	<br>

	<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Número de identificación</th>
				<th>Tipo de documento</th>
				<th>Tipo de persona</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Género</th>
				<th>Correo electrónico</th>
				<th>Teléfono</th>
				<th>Celular</th>
				<th>Empresa</th>
				<th>Responsable del Evento</th>
				<th>Operación</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($evento->personas as $asistente)

			 	<tr>
				 	<td>{{$asistente->numeroIdentificacion}}</td>
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
					<td>
						{!!link_to_route('asistencia.edit', $title = 'Modificar', $parameters = $asistente->idDetEventoPersona, $attributes = ['class'=>'btn btn-success'])!!}					
						{!!Form::open(['route'=> ['asistencia.destroy',$asistente->idPersona],'method'=>'DELETE'])!!}
		           	    {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
	                	{!!Form::close()!!}                         
	            	</td>
            	</tr>
			@endforeach
		</tbody>
	</table>
	<button id="ggg" type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>

</div>

@stop

@section('pageScripts')
	<script type="text/javascript">

	$(document).ready(function(){ 

		var tablePersona = $('#dataTablePersona').DataTable(
        {
          	// responsive:true,   //para el +
          	scrollY:        "300px",
	        scrollX:        true,
	        scrollCollapse: true,
	        paging:         false,
	        // fixedColumns:   {
	        //     leftColumns: 0,
	        //     rightColumns: 1
	        // },
			"aoColumnDefs":
			[
				{
				'bSortable': false, 'aTargets': [11]
				}
			],
			"oLanguage":
			{
				"sUrl": "../resources/lang/Espanhol.json"
			}
		});   	
		// $('#btn').click(function(e){
			
		// 	// var table = $('#dataTablePersona').DataTable();
 
		// 	tablePersona.rows().recalcHeight().draw();

		// });

		

		var table = $('#dataTable').DataTable(
        {
          	// responsive:true,   //para el +
          	scrollY:        "300px",
	        scrollX:        true,
	        scrollCollapse: true,
	        paging:         false,
	        fixedColumns:   {
	            leftColumns: 0,
	            rightColumns: 1
	        },
			"aoColumnDefs":
			[
				{
				'bSortable': false, 'aTargets': [11]
				}
			],
			"oLanguage":
			{
				"sUrl": "../resources/lang/Espanhol.json"
			}
		});   

	    $('.btn-warning').on( 'click', function () {
        	// console.log( tablePersona.row( this ).data() );

        	var $item = $(this).closest("tr");         

        	console.log("adas " + $item[0]);

    		// $("#dataTable").find('tbody').append($item[0]);   
    		table.row.add( [
            $item[0],
            '2',     
        ] ).draw( false );   
	    });

		// $('#dataTablePersona tbody').on( 'click', 'tr', function () {
  //   		console.log( table.row( this ).data() );
		// });

	});	
</script>
@stop


