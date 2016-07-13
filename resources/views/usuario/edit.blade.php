@extends('layouts.headerFooter')
@include ('layouts.menuHeader') 

@section('content')

{!!Form::model($user,['route'=> ['usuario.update',$user->id],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data2 col-md-8">

			<div class=" text-center ">
			<h1>Modificar Usuario</h1>
		    </div>

		    <br>

			@include('usuario.forms.user')

			<div class="form-group ">
				{!!Form::label('Contraseña ')!!}
				{!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingrese la contraseña'])!!}
			
			    @if ($errors->has('password'))
                    <span class="list-group-item list-group-item-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group ">
				{!!Form::label('password_confirmation','Confirmar contraseña')!!}
				{!!Form::password('password_confirmation',['class'=> 'form-control','placeholder'=>'Ingrese la contraseña nuevamente'])!!}
			</div>

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
