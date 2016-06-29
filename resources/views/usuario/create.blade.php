@extends('layouts.headerFooter')

<!-- @section('menu')

 <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&thinsp; Inicio</a></li>
 <li><a href="{{ url('usuario') }}">Administración de Usuarios</a></li>

@stop -->

@section('content')

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Registro de Usuario</h1>
		    </div>

		    <br>

		    @include('usuario.forms.user')

		    <!-- <div class="form-group">
		        {!!Form::label('idRol','Rol *')!!}
		        {!!Form::select('idRol','$nombreRol',null,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}
		    </div> -->

		    <div class="form-group ">
				{!!Form::label('password','Contraseña *')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}

				@if ($errors->has('password'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

			</div>

			<div class="form-group ">
				{!!Form::label('password_confirmation','Confirmar contraseña *')!!}
				{!!Form::password('password_confirmation',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña nuevamente'])!!}

				@if ($errors->has('password_confirmation'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif

			</div>

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop
