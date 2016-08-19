@extends('layouts.headerFooter')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::model($ingreso,['route'=> ['ingreso.update',$ingreso->idIngreso],'method'=>'PUT'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('ingreso.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Ingreso</h1>
		    </div>

		    <br>

			@include('ingreso.forms.ingreso')

		    <div class="form-group list-group">
			   {!!Form::label('numeroIdentificacion','Número de identificación *')!!}
			   {!!Form::number('numeroIdentificacion',"$persona->numeroIdentificacion",['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

			    @if ($errors->has('numeroIdentificacion'))
			        <span class="list-group-item list-group-item-danger">
			           <strong>{{ $errors->first('numeroIdentificacion') }}</strong>
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
		        <!-- $persona->tipoPersonas->nombre -->

		    <div class="form-group list-group">
		        {!!Form::label('nombres','Nombres *')!!}
		        {!!Form::text('nombres',$persona->nombres,['class'=> 'form-control','placeholder'=>'Ingrese los nombres'])!!}

		        @if ($errors->has('nombres'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('nombres') }}</strong>
		            </span>
		        @endif
		    </div>

		    <div class="form-group list-group">
		        {!!Form::label('apellidos','Apellidos *')!!}
		        {!!Form::text('apellidos',$persona->apellidos,['class'=> 'form-control','placeholder'=>'Ingrese los apellidos'])!!}

		        @if ($errors->has('apellidos'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('apellidos') }}</strong>
		            </span>
		        @endif
		    </div>

	        <div class="form-group ">
		        {!!Form::label('correo','Correo electrónico *')!!}
		        {!!Form::text('correo',$persona->correo,['class'=> 'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}

		        @if ($errors->has('correo'))
		            <span class="list-group-item list-group-item-danger">
		                <strong>{{ $errors->first('correo') }}</strong>
		            </span>
		        @endif
		    </div>

		    <div class="form-group list-group">
			    {!!Form::label('telefono','Teléfono')!!}
			    {!!Form::number('telefono',"$persona->telefono",['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

			    @if ($errors->has('telefono'))
			        <span class="list-group-item list-group-item-danger">
			           <strong>{{ $errors->first('telefono') }}</strong>
			        </span>
			    @endif
			</div>

			<div class="form-group list-group">
			    {!!Form::label('celular','Celular')!!}
			    {!!Form::number('celular',"$persona->celular",['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

			    @if ($errors->has('celular'))
			        <span class="list-group-item list-group-item-danger">
			           <strong>{{ $errors->first('celular') }}</strong>
			        </span>
			    @endif
			</div>

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

@section('script')
			<script type="text/javascript">
				$(document).ready(function(){ 
					$("#tipoDocumento").val($persona->tipoDocumentos->nombre);
				}
			</script>	

@stop		

{!!Form::close()!!}

		</div>

	</div>

@stop
