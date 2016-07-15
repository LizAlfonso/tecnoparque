@extends('layouts.headerFooter')

@include('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Usuario</h1>
		    </div>

		    <br>

		    @include('usuario.forms.user')

		    <div class="form-group ">
				{!!Form::label('password','Contraseña *')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingrese la contraseña'])!!}

				@if ($errors->has('password'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

			</div>

			<div class="form-group ">
				{!!Form::label('password_confirmation','Confirmar contraseña *')!!}
				{!!Form::password('password_confirmation',['class'=> 'form-control','placeholder'=>'Ingrese la contraseña nuevamente'])!!}

				@if ($errors->has('password_confirmation'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif

			</div>

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

			<br>

		</div>

	</div>

{!!Form::close()!!}

@stop
