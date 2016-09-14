@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($tipoDocumento,['route'=> ['tipoDocumento.update',$tipoDocumento->idTipoDocumento],'method'=>'PUT'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('tipoDocumento.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Modificar Tipos de documento</h1>
		    </div>

		    <br>

            @include('tipoDocumento.forms.documento')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>

@stop
