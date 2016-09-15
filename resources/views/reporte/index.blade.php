@extends('layouts.headerFooter')

@section('content')
@include ('layouts.menuHeader')

<h1><center>Generar reportes</center></h1>

<div class="container">

    <div class="banner-data">


		@if(count($errors) > 0)
			<div class="alert alert-danger alert-dismissible" role="alert">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<ul>
			  		@foreach($errors->all() as $error)
			  		<li>{{!!$error!!}}</li>
			  		@endforeach
			  	</ul>
			</div>
		@endif
      	
		<ul class="list-group">
			<button id="reporte1" type="button" class="list-group-item">Reporte asistencia <strong>fuera</strong> de Tecnoparque</button>
			<div id="formularioReporte1" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteAsistenciaFuera', 'method'=>'POST'])!!}
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>

			<button id="reporte2" type="button" class="list-group-item">Reporte asistencia <strong>dentro</strong> de Tecnoparque</button>
			<div id="formularioReporte2" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteAsistenciaDentro', 'method'=>'POST'])!!}
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>

			<button id="reporte3" type="button" class="list-group-item">Reporte asistencia completa</button>
			<div id="formularioReporte3" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteAsistenciaCompleta', 'method'=>'POST'])!!}						
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>

			<button id="reporte4" type="button" class="list-group-item">Reporte gestor por EDT realizado</button>
			<div id="formularioReporte4" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteGestores', 'method'=>'POST'])!!}
						<div class="form-group list-group">
							{!!Form::label('gestor','Nombre gestor *')!!}
							{!!Form::select('gestor',$gestores,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}
						</div>
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>

			<button id="reporte5" type="button" class="list-group-item">Reporte total gestores por EDT realizado</button>
			<div id="formularioReporte5" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteGestoresCompleto', 'method'=>'POST'])!!}
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>

			<button id="reporte6" type="button" class="list-group-item">Reporte ingresos</button>
			<div id="formularioReporte6" class="panel panel-default" style="display: none;"">
				<div class="panel-body">
					{!!Form::open(['route'=>'reporteIngresos', 'method'=>'POST'])!!}
			      		<div class="form-group list-group">
							{!!Form::label('fechaInicial','Fecha *')!!}
							{!!Form::text('fechaInicial',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group list-group">
							{!!Form::label('fechaFinal','Fecha *')!!}
							{!!Form::text('fechaFinal',null,['class'=>'form-control fecha','placeholder'=>'aaaa/mm/dd'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div> 
			      	{!!Form::close()!!}
				</div>
			</div>
			
		</ul>

    </div>
</div>

@stop

@section('pageScripts')
	<script type="text/javascript">
		$(document).ready(function(){ 

			$(".fecha").datepicker(
		    {
		    	format: "yyyy/mm/dd",
		    	language: "es"
		    })

			$("#reporte1").click(function(){
			    $("#formularioReporte1").toggle();
			});

			$("#reporte2").click(function(){
			    $("#formularioReporte2").toggle();
			});

			$("#reporte3").click(function(){
			    $("#formularioReporte3").toggle();
			});

			$("#reporte4").click(function(){
			    $("#formularioReporte4").toggle();
			});

			$("#reporte5").click(function(){
			    $("#formularioReporte5").toggle();
			});

			$("#reporte6").click(function(){
			    $("#formularioReporte6").toggle();
			});

		})
	</script>
@stop
