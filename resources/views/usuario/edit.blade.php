@extends('layouts.headerFooter')

@section('content')

    @include('alerts.request')

{!!Form::model($user,['route'=> ['usuario.update',$user->id],'method'=>'PUT'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Modificar Usuario</h1>
		    </div>

		    <br>

			@include('usuario.forms.user')

			<div class="form-group ">
			{!!Form::submit('Modificar',['class'=>'btn btn-success'])!!}
			</div> 

			<div class="clearfix"> </div>

{!!Form::close()!!}

		</div>

	</div>


@stop
