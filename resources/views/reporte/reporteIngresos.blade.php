@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

<div class="container2">

    <div class="banner-data3">

		<h1><center>Reporte ingresos Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}</center></h1>

		<div>
			{!!link_to_route('reporte.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>
		<br>

		<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Total</th>
					<th>Aprendiz SENA</th>
					<th>Media técnica</th>
					<th>Talento</th>
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
						{{$query[0]->mediaTecnica}}					
					</td>
					<td>
						{{$query[0]->talento}}
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
		                title: 'Reporte ingresos Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'pdf',
		                title: 'Reporte ingresos Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            },
		            {
		                extend: 'print',
		                title: 'Reporte ingresos Tecnoparque {{$fechaInicial}} - {{$fechaFinal}}'
		            }
		        ]
           	})

		})  
	</script>
@stop

