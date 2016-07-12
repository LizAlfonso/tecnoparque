@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($tipoPersona,['route'=> ['tipoPersona.update',$tipoPersona->idTipoPersona],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data2 col-md-8">

			<div class=" text-center ">
			<h1>Modificar Tipos de persona</h1>
		    </div>

		    <br>

            @include('tipoPersona.forms.tipoPersona')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
