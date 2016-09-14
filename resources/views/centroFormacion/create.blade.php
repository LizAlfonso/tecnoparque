@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'centroFormacion.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('centroFormacion.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Centros de formación</h1>
		    </div>

		    <br>

		    @include('centroFormacion.forms.centro')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop