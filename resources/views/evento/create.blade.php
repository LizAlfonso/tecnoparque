@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::open(['route'=>'evento.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('evento.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Evento</h1>
		    </div>

		    <br>

		    @include('evento.forms.evento')

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

		var wrapper = $("#divLugar");
		var selectLugar = $("#lugar");

		$(selectLugar).change(function(e){
			if (selectLugar.val() == "Dentro") {
				$(wrapper).append(
					'<div id="divDentro">' +
						'{!!Form::label("lugarEspecifico","¿En cuál piso?")!!}' +
						'{!! Form::select("lugarEspecifico", ["Piso 6" => "Piso 6", "Piso 7" => "Piso 7"], null, ["class" => "form-control","placeholder"=>"Seleccione"]) !!}' +
					'</div>'
				);

				$('#divFuera').remove();

			} else if (selectLugar.val() == "Fuera") {
				$(wrapper).append(
					'<div id="divFuera">' +
						'{!!Form::label("lugarEspecifico","¿En qué lugar?")!!}'  +
							'{!!Form::text("lugarEspecifico",null,["class"=> "form-control","placeholder"=>"Ingrese el lugar del evento"])!!}'  +
					'</div>'
				);

				$('#divDentro').remove();

			} else {
				$('#divDentro').remove();
				$('#divFuera').remove();

			}

		});

	});
</script>
@stop