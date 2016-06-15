@extends('layouts.headerFooter')  
@section('content')

@if(count($errors) > 0)

<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
    <ul>
    	@foreach($errors->all() as $error)
    	   <li>(!!$error!!)</li>

    	@endforeach
    </ul>

@endif

{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div class="banner-data col-md-8">

			<div class=" text-center ">
			<h1>Registro de Usuario</h1>
		    </div>

		    <br>

		    @include('usuario.forms.user')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

			<div class="clearfix"> </div>

		</div>

	</div>

{!!Form::close()!!}

@stop
