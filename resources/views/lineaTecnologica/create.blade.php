@extends('layouts.headerFooter')  

@include ('layouts.menuHeader')

@section('content')

{!!Form::open(['route'=>'lineaTecnologica.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('lineaTecnologica.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Línea tecnológica</h1>
		    </div>

		    <br>

		    @include('lineaTecnologica.forms.lineaTecnologica')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop