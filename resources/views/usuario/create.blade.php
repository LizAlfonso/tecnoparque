@extends('layouts.headerFooter')  
@section('content')

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8 ">

			<div class=" text-center ">
			<h2>Registro de Usuario</h2>
		    </div>

		    <br>

			<div class="form-group ">
				{!!Form::label('Nombre de usuario:')!!}
				{!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
			</div>

			<div class="form-group ">
				{!!Form::label('Correo electrónico:')!!}
				{!!Form::text('email',null,['class'=> 'form-control','placeholder'=>'Ingresa el correo'])!!}
			</div>

			<div class="form-group ">
				{!!Form::label('Contraseña:')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}
			</div>


			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

			<div class="clearfix"> </div>

		</div>

	</div>

{!!Form::close()!!}

@stop
