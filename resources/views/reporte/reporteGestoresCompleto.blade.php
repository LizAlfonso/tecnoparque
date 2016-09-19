@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

<div class="container2">

    <div class="banner-data3">

		<h1><center>Reporte completo EDT realizado por gestor {{$fechaInicial}} - {{$fechaFinal}}</center></h1>

		<div>
			{!!link_to_route('reporte.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>
		<br>

		<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th></th>
					<th>Nombre gestor</th>
					<th>Apellido gestor</th>
					<th>Nombre evento</th>
					<th>Servicio</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Lugar</th>
					<th>Lugar específico</th>
					<th>Cupos</th>					
				</tr>
			</thead>
			<tbody>
				@foreach($query as $q)
					<tr>
						<td></td>
						<td>{{$q->nombres}}</td>						
						<td>{{$q->apellidos}}</td>						
						<td>{{$q->nombre}}</td>						
						<td>{{$q->servicio}}</td>						
						<td>{{$q->fecha}}</td>						
						<td>{{$q->hora}}</td>						
						<td>{{$q->lugar}}</td>						
						<td>{{$q->lugarEspecifico}}</td>						
						<td>{{$q->cupos}}</td>																
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
		        "order": [[ 1, 'asc' ]],
				scrollX: true,
           		dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                title: 'Reporte completo EDT realizado por gestor {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'pdf',
		                title: 'Reporte completo EDT realizado por gestor {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'print',
		                title: 'Reporte completo EDT realizado por gestor {{$fechaInicial}} - {{$fechaFinal}}'
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

