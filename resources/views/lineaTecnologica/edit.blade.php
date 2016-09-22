@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($lineaTecnologica,['route'=> ['lineaTecnologica.update',$lineaTecnologica->idLineaTecnologica],'method'=>'PUT'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('lineaTecnologica.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Línea tecnológica</h1>
		    </div>

		    <br>

			@include('lineaTecnologica.forms.lineaTecnologica')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
