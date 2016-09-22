@extends('layouts.headerFooter')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::model($ingreso,['route'=> ['ingreso.update',$ingreso->idIngreso],'method'=>'PUT'])!!}

	<div class="container">

		<div>
		<br><br>
		 	{!!link_to_route('ingreso.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Ingreso</h1>
		    </div>

		    <br>

		    <div class="form-group list-group">
			   {!!Form::label('numeroIdentificacion','Número de identificación')!!}
			   {!!Form::number('numeroIdentificacion',$persona->numeroIdentificacion,['class'=> 'form-control','placeholder'=>'','disabled'=>'disabled'])!!}

			    @if ($errors->has('numeroIdentificacion'))
			        <span class="list-group-item list-group-item-danger">
			           <strong>{{ $errors->first('numeroIdentificacion') }}</strong>
			        </span>
			    @endif
			</div>

			<div class="form-group ">
		        {!!Form::label('idTipoPersona','Tipo de persona')!!}
		        {!!Form::text('idTipoPersona',$persona->tipoPersonas->nombre,['class'=> 'form-control','placeholder'=>'','disabled'=>'disabled'])!!}

		        @if ($errors->has('idTipoPersona'))
			         <span class="list-group-item list-group-item-danger">
			           <strong>{{ $errors->first('idTipoPersona') }}</strong>
			         </span>
			    @endif
		    </div>

		    <div class="form-group list-group">
		        {!!Form::label('nombres','Nombres *')!!}
		        {!!Form::text('nombres',$persona->nombres,['class'=> 'form-control','placeholder'=>'','disabled'=>'disabled'])!!}

		        @if ($errors->has('nombres'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('nombres') }}</strong>
		            </span>
		        @endif
		    </div>

		    <div class="form-group list-group">
		        {!!Form::label('apellidos','Apellidos *')!!}
		        {!!Form::text('apellidos',$persona->apellidos,['class'=> 'form-control','placeholder'=>'','disabled'=>'disabled'])!!}

		        @if ($errors->has('apellidos'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('apellidos') }}</strong>
		            </span>
		        @endif
		    </div>

	        <div class="form-group ">
		        {!!Form::label('correo','Correo electrónico *')!!}
		        {!!Form::text('correo',$persona->correo,['class'=> 'form-control','placeholder'=>'','disabled'=>'disabled'])!!}

		        @if ($errors->has('correo'))
		            <span class="list-group-item list-group-item-danger">
		                <strong>{{ $errors->first('correo') }}</strong>
		            </span>
		        @endif
		    </div>

		    @include('ingreso.forms.ingreso')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

{!!Form::close()!!}

		</div>

	</div>

@stop
