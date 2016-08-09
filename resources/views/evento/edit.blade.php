@extends('layouts.headerFooter')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::model($evento,['route'=> ['evento.update',$evento->idEvento],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Evento</h1>
		    </div>

		    <br>

			@include('evento.forms.evento')

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

			var wrapper = $("#divLugar");
			var selectLugar = $("#lugar");

			if (selectLugar.val() == "Fuera") {				
				$('#idLugar').show();
			} else if (selectLugar.val() == "Dentro") {
				$('#lugarEspecifico').show();
			}

			$(selectLugar).change(function(e){
				if (selectLugar.val() == "Dentro") {

					$(wrapper).append(
						'<div id="divDentro">' +
							'{!!Form::label("lugarEspecifico","¿En cuál piso?")!!}' +
							'{!! Form::select("lugarEspecifico", ["Piso 6" => "Piso 6", "Piso 7" => "Piso 7"], null, ["class" => "form-control","placeholder"=>"Seleccione"]) !!}' +
						'</div>'
					);

					$('#divFuera').remove();
					$('#idLugar').hide();

				} else if (selectLugar.val() == "Fuera") {

					$(wrapper).append(
						'<div id="divFuera">' +
							'{!!Form::label("idLugar","¿En qué lugar?")!!}' +
							'{!!Form::select("idLugar",$lugares,null,["placeholder"=>"Seleccione","class"=>"form-control"])!!}' +
						'</div>'
					);

					$('#divDentro').remove();
					$('#lugarEspecifico').hide();

				} else {
					
					$('#divDentro').remove();
					$('#divFuera').remove();

				}

			});
		});
	</script>
@stop
