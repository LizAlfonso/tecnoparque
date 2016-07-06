@extends('layouts.headerFooter')

@section('content')

@include('alerts.request')

{!!Form::model($servicio,['route'=> ['servicio.update',$servicio->idServicio],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data2 col-md-8">

			<div class=" text-center ">
			<h1>Modificar Servicio</h1>
		    </div>

		    <br>

			<div class="form-group list-group">
				{!!Form::label('nombre','Nombre ')!!}
				{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del servicio'])!!}

				@if ($errors->has('nombre'))
		            <span class="list-group-item list-group-item-danger">
		               <strong>{{ $errors->first('nombre') }}</strong>
		            </span>
		        @endif
		    </div>

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
