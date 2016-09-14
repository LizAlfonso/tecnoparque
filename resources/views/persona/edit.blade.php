@extends('layouts.headerFooter')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::model($persona,['route'=> ['persona.update',$persona->idPersona],'method'=>'PUT'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('persona.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Persona</h1>
		    </div>

		    <br>

			@include('persona.forms.persona')

			  <!-- cuando ya está seleccionado Gestor, Aprendiz o Instructor -->
		    <div class="form-group " id="divGestorM" name="linea">
		    {!!Form::label('idLineaTecnologica','Línea tecnológica *')!!}
		    {!!Form::select('idLineaTecnologica',$lineas,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}
		    </div>

		    <div class="form-group " id="divSENAM" name="linea" >
		    {!!Form::label('idCentroFormacion','Centro de formación *')!!}
		    {!!Form::select('idCentroFormacion',$centros,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!} 
		    </div>

			@include('persona.forms.persona2')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

{!!Form::close()!!}

		</div>

	</div>

@stop

@section('pageScripts')
<script type="text/javascript">
	$(document).ready(function(){ 

		var wrapper = $("#divGAI");
		var selectTipoPersona = $("#tipoP");

			if (selectTipoPersona.find(":selected").text() == "Gestor") {
				$('#divGestorM').show();
				$('#divSENAM').remove();
			 } else if (selectTipoPersona.find(":selected").text() == "Aprendiz SENA" || selectTipoPersona.find(":selected").text() == "Instructor SENA") {
				$('#divSENAM').show();
				$('#divGestorM').remove();
			 } else {
				$('#divGestorM').remove();
				$('#divSENAM').remove();
			}

			$(selectTipoPersona).change(function(e){

				$('#divGestorM').remove();
				$('#divSENAM').remove();
				$('#divSENA').remove();

			if (selectTipoPersona.find(":selected").text() == "Gestor") {
				$(wrapper).append(
					'<div id="divGestor">' +
						'{!!Form::label("idLineaTecnologica","Línea tecnológica *")!!}' +
						'{!! Form::select("idLineaTecnologica", $lineas,null,["placeholder"=>"Seleccione","class"=>"form-control"])!!}'  +
					'</div>'
				);			

			 } else if (selectTipoPersona.find(":selected").text() == "Aprendiz SENA" || selectTipoPersona.find(":selected").text() == "Instructor SENA") {
				$(wrapper).append(
					'<div id="divSENA">' +
						'{!!Form::label("idCentroFormacion","Centro de formación *")!!}' +
						'{!!Form::select("idCentroFormacion",$centros,null,["placeholder"=>"Seleccione","class"=>"form-control"]) !!}' +
					'</div>'
				);

			 	$('#divGestor').remove();
			// 	$('#idLineaTecnologica').hide();

			 } else {
				$('#divGestor').remove();
				$('#divSENA').remove();
			}

		});

	});
</script>
@stop
