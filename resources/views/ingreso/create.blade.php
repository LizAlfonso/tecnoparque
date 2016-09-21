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

                <div class="input-group">   

                    {!!Form::number('numeroIdentificacion',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

                    @if ($errors->has('numeroIdentificacion'))
                        <span class="list-group-item list-group-item-danger">
                          <strong>{{ $errors->first('numeroIdentificacion') }}</strong>
                        </span>
                    @endif

                    <span class="input-group-btn">
                        <button id="btnNumeroIdentificacion" class="btn btn-info" type="button">Verificar</button>
                    </span>

                </div>

            </div>

    <div id="divPersona" class="form-group list-group">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Persona registrada</h3>
            </div>
            <div class="panel-body">
                <div class="form-group list-group"> 
                    <label>Nombre</label>   
                        <input id="nombrePersona" disabled class='form-control'>
                </div>
                <div class="form-group list-group">
                    <label>Tipo Persona</label> 
                        <input id="tipoPersona" disabled class='form-control'>
                </div>
                <div class="form-group list-group">
                    <label>Correo</label>   
                        <input id="correo" disabled class='form-control'>  
                </div>
            </div>
        </div>

    </div>

   <div id="divRegistrarPersona" class="form-group list-group">
            
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar nueva persona</h3>
                    </div>
                    <div class="panel-body">
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
                            {!!Form::label('idTipoDocumento','Tipo de documento *')!!}
                            {!!Form::select('idTipoDocumento',$tipoDocumentos,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}

                           @if ($errors->has('idTipoDocumento'))
                             <span class="list-group-item list-group-item-danger">
                               <strong>{{ $errors->first('idTipoDocumento') }}</strong>
                             </span>
                           @endif
                        </div>

                        <div class="form-group ">
                            {!!Form::label('idTipoPersona','Tipo de persona *')!!}
                            {!!Form::select('idTipoPersona',$tipoPersonas,null,['placeholder'=>'Seleccione','id'=>'tipoP','class'=>'form-control'])!!}

                           @if ($errors->has('idTipoPersona'))
                             <span class="list-group-item list-group-item-danger">
                               <strong>{{ $errors->first('idTipoPersona') }}</strong>
                             </span>
                           @endif
                        </div>

                        <div id="divAprendiz" class="form-group">
    
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
                    </div>
                </div>

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

            $divPersona = $("#divPersona");
            $divRegistrarPersona = $("#divRegistrarPersona");
            $divPersona.hide();
            $divRegistrarPersona.hide();

            var token = $("#token").val();

            $("#btnNumeroIdentificacion").click(function(){   

                var numeroIdentificacion = $("#numeroIdentificacion").val();        

                $.ajax({
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',
                    url: "../consultarNumeroIdentificacion",
                    data: {id: numeroIdentificacion},
                    dataType: 'json',
                    success: function(data) {
                       
                        if (!$.isEmptyObject(data["mensaje"])) {
                            $divPersona.show();
                            $divRegistrarPersona.hide();
                            $nombres = data["mensaje"][0].nombres;
                            $tipoPersona = data["mensaje"][0].nombre;
                            $correo = data["mensaje"][0].correo;
                            // console.log($tipoPersona);

                            $("#nombrePersona").val($nombres);
                            $("#tipoPersona").val($tipoPersona);
                            $("#correo").val($correo);
                        } else {
                            $divPersona.hide();
                            $divRegistrarPersona.show();

                            var wrapper = $("#divAprendiz");              //*
                            var selectTipoPersona = $("#tipoP");    //*

                            $(selectTipoPersona).change(function(e){
                                // console.log("cambió persona");
                                $('#divSENA').remove();

                                if (selectTipoPersona.find(":selected").text() == "Aprendiz SENA" || selectTipoPersona.find(":selected").text() == "Instructor SENA") {
                                    $(wrapper).append(
                                        '<div id="divSENA">' +
                                            '{!!Form::label("idCentroFormacion","Centro de formación *")!!}' +
                                            '{!!Form::select("idCentroFormacion",$centros,null,["placeholder"=>"Seleccione","class"=>"form-control"]) !!}' +
                                        '</div>'
                                    );
                                  
                                 }

                            });
                        }
                        
                    }       
                })
            });

        })
        
    </script>

@stop