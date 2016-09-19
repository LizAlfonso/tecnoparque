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
					<th>Total</th>
					<th>Aprendiz SENA</th>
					<th>Gestor</th>
					<th>Instructor</th>
					<th>Media técnica</th>
					<th>Talento</th>
					<th>Universitario</th>
					<th>Otro</th>					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						{{$query[0]->total}}	
					</td>
					<td>
						{{$query[0]->aprendizSena}}				
					</td>
					<td>
						{{$query[0]->gestor}}					
					</td>
					<td>
						{{$query[0]->instructor}}
					</td>
					<td>
						{{$query[0]->mediaTecnica}}					
					</td>
					<td>
						{{$query[0]->talento}}
					</td>
					<td>
						{{$query[0]->universitario}}
					</td>					
					<td>
						{{$query[0]->otro}}
					</td>
				</tr>
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
           	})

		})  
	</script>
@stop

