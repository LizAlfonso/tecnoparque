@extends('layouts.headerFooter')
@include ('layouts.menuHeader')

@section('content')

{!!Form::model($tipoDocumento,['route'=> ['tipoDocumento.update',$tipoDocumento->idTipoDocumento],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data2 col-md-8">

			<div class=" text-center ">
			<h1>Modificar Tipos de documento</h1>
		    </div>

		    <br>

            @include('tipodocumento.forms.documento')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
