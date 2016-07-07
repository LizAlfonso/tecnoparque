@extends('layouts.headerFooter')
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::model($evento,['route'=> ['evento.update',$evento->idEvento],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data2 col-md-8">

			<div class=" text-center ">
			<h1>Modificar Evento</h1>
		    </div>

		    <br>

			@include('evento.forms.evento')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

{!!Form::close()!!}

		</div>

	</div>

@stop
