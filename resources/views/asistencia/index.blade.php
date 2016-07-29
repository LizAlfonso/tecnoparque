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
						{!!Form::checkbox('responsable', 'value')!!}
						@else
						{!!Form::checkbox('responsable', 'value', true)!!}
						@endif
					</td>
					<td>
						{!!link_to_route('asistencia.edit', $title = 'Modificar', $parameters = $asistente->idDetEventoPersona, $attributes = ['class'=>'btn btn-success'])!!}						
		           	    {!!Form::button('Quitar',['class'=>'btn btn-danger'])!!}
	            	</td>
            	</tr>
			@endforeach
		</tbody>
	</table>
	<button id="ggg" type="button" class="btn btn-primary" data-dismiss="modal">Guardar cambios</button>
	<br>

</div>
@stop

@section('pageScripts')
	<script type="text/javascript">

	$(document).ready(function(){ 

		var dataAsistentes = [];

		$("#dataTable tr").each(function(){
		    dataAsistentes.push($(this).find("td:first").text()); //put elements into array
		});

		// console.log("data aca " + dataAsistentes);

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
				'bSortable': false, 'aTargets': [10]
				}
			],
			"oLanguage":
			{
				"sUrl": "../resources/lang/Espanhol.json"
			}
		});   	

		var table = $('#dataTable').DataTable(
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

		$('#dataTablePersona tbody').on( 'click', '.btn-warning', function () {		

		    var data = tablePersona.row( $(this).parents('tr') ).data();
		    var idPersonas = data[0];		    

		    for (var i = 0; i < dataAsistentes.length; i++) {
		    	console.log("personas: " + idPersonas + " dataAsistentes: " + dataAsistentes[i]);
		    	if (idPersonas == dataAsistentes[i]) {
		    		swal({
						title: "",
						text: "La persona escogida ya esta en este evento",
						type: "error",
						confirmButtonText: "Aceptar",
						allowOutsideClick: true
					})
		    		return false;
		    	}
		    }

		    table.row.add( [
		        data[0],
		        data[1],
		        data[2],
		        data[3],
		        data[4],
		        data[5],
		        data[6],
		        data[7],
		        data[8],
		        data[9],		        
				'{!!Form::checkbox('name', 'value')!!}',							
		        '<td>' + 
		        	'<button class="btn btn-danger" type="button">Eliminar</button>' + 
	        	'</td>'
		    ] ).draw( false );		  

		} );

	});	
</script>
@stop


