@extends('layouts.headerFooter')  

@section('content')
@include ('layouts.menuHeader')

{!!Form::open(['route'=>'evento.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Registro de Evento</h1>
		    </div>

		    <br>

		    @include('evento.forms.evento')

		    <div class="form-group ">
				<!-- {!!Form::label('password','Contraseña *')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}

				@if ($errors->has('password'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif -->

			</div>

			<div class="form-group ">
				<!-- {!!Form::label('password_confirmation','Confirmar contraseña *')!!}
				{!!Form::password('password_confirmation',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña nuevamente'])!!}

				@if ($errors->has('password_confirmation'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif -->

			</div>

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop