@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($centroFormacion,['route'=> ['centroFormacion.update',$centroFormacion->idCentroFormacion],'method'=>'PUT'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('centroFormacion.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Centros de formación</h1>
		    </div>

		    <br>

            @include('centroFormacion.forms.centro')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>

@stop
