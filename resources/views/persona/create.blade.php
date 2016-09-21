@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::open(['route'=>'persona.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('persona.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Persona</h1>
		    </div>

		    <br>

		    @include('persona.forms.persona')
		    @include('persona.forms.persona2')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop

@section('pageScripts')
<script type="text/javascript">
	$(document).ready(function(){ 

		var wrapper = $("#divGAI");
		var selectTipoPersona = $("#tipoP");

		$(selectTipoPersona).change(function(e){

				$('#divSENA').remove();
				$('#divGestor').remove();

			if (selectTipoPersona.find(":selected").text() == "Gestor T1" || selectTipoPersona.find(":selected").text() == "Gestor T2") {
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

				// $('#divGestor').remove();

			 } else {
				$('#divGestor').remove();
				$('#divSENA').remove();
			}

		});

	});
</script>
@stop