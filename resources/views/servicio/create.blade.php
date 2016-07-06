@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')


{!!Form::open(['route'=>'servicio.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Registro de Servicio</h1>
		    </div>

		    <br>

		    <div class="form-group list-group">
				{!!Form::label('nombre','Nombre *')!!}
				{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del servicio'])!!}

				@if ($errors->has('nombre'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('nombre') }}</strong>
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