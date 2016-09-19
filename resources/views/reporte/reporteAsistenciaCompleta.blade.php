@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

<div class="container2">

    <div class="banner-data3">

		<h1><center>Reporte asistencia fuera de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}</center></h1>

		<div>
			{!!link_to_route('reporte.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>
		<br>

		<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th></th>
					<th>Fecha evento</th>
					<th>Nombre evento</th>
					<th>Lugar</th>
					<th>Lugar específico</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Tipo de persona</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>Celular</th>
					<th>Empresa</th>
					<th>Centro</th>
				</tr>
			</thead>
			<tbody>
				@foreach($query as $q)
					<tr>
						<td></td>
						<td>{{$q->fecha}}</td>						
						<td>{{$q->nombre}}</td>						
						<td>{{$q->lugar}}</td>						
						<td>{{$q->lugarEspecifico}}</td>						
						<td>{{$q->nombres}}</td>						
						<td>{{$q->apellidos}}</td>						
						<td>{{$q->tipoPersona}}</td>						
						<td>{{$q->correo}}</td>						
						<td>{{$q->telefono}}</td>						
						<td>{{$q->celular}}</td>						
						<td>{{$q->empresa}}</td>						
						<td>{{$q->centro}}</td>						
					</tr>
				@endforeach
			</tbody>
		</table>
    </div>
</div>

@stop

@section('pageScripts')
	<script type="text/javascript">
		$(document).ready(function(){ 

			var t = $('#dataTable').DataTable({
				"columnDefs": [ 
				{
		            "searchable": false,
		            "orderable": false,
		            "targets": 0
		        } 
		        ],
		        "order": [[ 2, 'asc' ]],
				scrollX: true,
           		dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                title: 'Reporte asistencia fuera de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'pdf',
		                title: 'Reporte asistencia fuera de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'print',
		                title: 'Reporte asistencia fuera de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            }
		        ]
           	});

           	t.on( 'order.dt search.dt', function () {
		        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
		            cell.innerHTML = i+1;
		            t.cell(cell).invalidate('dom');
		        } );
		    } ).draw();

		})  
	</script>
@stop

