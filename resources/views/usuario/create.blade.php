@extends('layouts.headerFooter')  
@section('content')

@include('alerts.request')

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Registro de Usuario</h1>
		    </div>

		    <br>

		    @include('usuario.forms.user')

		    <div class="form-group ">
				{!!Form::label('password','Contraseña *')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}
			</div>

			<div class="form-group ">
				{!!Form::label('password_confirmation','Confirmar contraseña *')!!}
				{!!Form::password('password_confirmation',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña nuevamente'])!!}
			</div>

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

			<div class="clearfix"> </div>

		</div>

	</div>

{!!Form::close()!!}

@stop
