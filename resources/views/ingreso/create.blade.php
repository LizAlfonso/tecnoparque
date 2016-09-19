@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')			



{!!Form::open(['route'=>'ingreso.store', 'method'=>'POST'])!!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

	<div class="container" >
		<div>
		<br><br>
		 	{!!link_to_route('ingreso.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Ingreso</h1>
		    </div>

		    <br>

		    <div class="form-group list-group">
			    {!!Form::label('numeroIdentificacion','Número de identificación *')!!}
        		{!!Form::number('numeroIdentificacion',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}
  			</div>

		    @include('ingreso.forms.ingreso')

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

			var token = $("#token").val();

			$("#numeroIdentificacion").keyup(function(){   

				var numeroIdentificacion = $("#numeroIdentificacion").val();		

				$.ajax({
	            	headers: {'X-CSRF-TOKEN': token},
	                type: 'POST',
	                url: "./consultarNumeroIdentificacion",
	                data: {id: numeroIdentificacion},
	                dataType: 'json'
	     //            success: function(data) {
		
	    	// 			swal(
						// 	'Evento modificado correctamente',
						// 	'',
						// 	'success'
						// )
		    //         },  
		    //         error: function(data) {
	     //        		swal(
						// 	'Ha ocurrido un error',
						// 	'',
						// 	'error'
						// )
		               
		    //         },          
            	})
		    });

		})
		
	</script>

@stop