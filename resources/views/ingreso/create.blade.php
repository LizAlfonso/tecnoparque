@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::open(['route'=>'ingreso.store', 'method'=>'POST'])!!}

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

        @if ($errors->has('numeroIdentificacion'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('numeroIdentificacion') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group ">
        {!!Form::label('idTipoPersona','Tipo de persona *')!!}
        {!!Form::select('idTipoPersona',$tipoPersonas,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}

       @if ($errors->has('idTipoPersona'))
         <span class="list-group-item list-group-item-danger">
           <strong>{{ $errors->first('idTipoPersona') }}</strong>
         </span>
       @endif
    </div>

    <div class="form-group list-group">
        {!!Form::label('nombres','Nombres *')!!}
        {!!Form::text('nombres',null,['class'=> 'form-control','placeholder'=>'Ingrese los nombres'])!!}

        @if ($errors->has('nombres'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('nombres') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group list-group">
        {!!Form::label('apellidos','Apellidos *')!!}
        {!!Form::text('apellidos',null,['class'=> 'form-control','placeholder'=>'Ingrese los apellidos'])!!}

        @if ($errors->has('apellidos'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('apellidos') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group ">
        {!!Form::label('correo','Correo electrónico *')!!}
        {!!Form::text('correo',null,['class'=> 'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}

        @if ($errors->has('correo'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('correo') }}</strong>
            </span>
        @endif

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

    $contar = 1;

    var contarb = 1;

    $("#numeroIdentificacion").keyup(function(){

        // $numeroIdentificacion = $("#numeroIdentificacion").val();
        // console.log($numeroIdentificacion);

        $('#nombres').val("bla");

        if (contarb==1) {
            $('#nombres').val(contarb);
            contarb = contarb+1;
            // contarb = contarb+1;
         }
         else
         {
            $('#nombres').val(contarb);
            contarb = contarb+1;
         }
       
       $('#apellidos').val("bla bla");

    });
</script>
@stop