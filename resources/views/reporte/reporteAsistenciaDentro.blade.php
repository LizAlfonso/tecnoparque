@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

<div class="container2">

    <div class="banner-data3">

		<h1><center>Reporte asistencia dentro de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}</center></h1>

		<div>
			{!!link_to_route('reporte.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>
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
					<th>Operación</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
    </div>
</div>

@stop

@section('pageScripts')
	<script type="text/javascript">
		$(document).ready(function(){ 

			$('#dataTable').dataTable({
				scrollX:        true,
           		dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                title: 'Reporte asistencia dentro de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'pdf',
		                title: 'Reporte asistencia dentro de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'print',
		                title: 'Reporte asistencia dentro de Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            }
		        ]
           	})

		})  
	</script>
@stop

