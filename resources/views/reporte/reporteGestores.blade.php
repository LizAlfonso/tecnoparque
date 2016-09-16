@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

<div class="container2">

    <div class="banner-data3">

		<h1><center>Reporte del gestor {{$nombreGestor->nombres}} por EDT realizado {{$fechaInicial}} - {{$fechaFinal}}</center></h1>

		<div>
			{!!link_to_route('reporte.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>
		<br>

		<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>	
					<th></th>				
					<th>Nombre evento</th>
					<th>Fecha evento</th>
					<th>Hora evento</th>
					<th>Lugar</th>
					<th>Cupos</th>
					<th>Descripción</th>					
				</tr>
			</thead>
			<tbody>
				@foreach($query as $q)
					<tr>	
						<td></td>					
						<td>{{$q->nombre}}</td>
						<td>{{$q->fecha}}</td>
						<td>{{$q->hora}}</td>
						<td>{{$q->lugarEspecifico}}</td>					
						<td>{{$q->cupos}}</td>
						<td>{{$q->descripcion}}</td>						
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
		                title: 'Reporte del gestor {{$nombreGestor->nombres}} por EDT realizado {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'pdf',
		                title: 'Reporte del gestor {{$nombreGestor->nombres}} por EDT realizado {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'print',
		                title: 'Reporte del gestor {{$nombreGestor->nombres}} por EDT realizado {{$fechaInicial}} - {{$fechaFinal}}'
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

