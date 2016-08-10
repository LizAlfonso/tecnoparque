@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::open(['route'=>'persona.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('persona.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Persona</h1>
		    </div>

		    <br>

		    @include('persona.forms.persona')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop