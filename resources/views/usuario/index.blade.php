@extends('layouts.headerFooter')

@section('menu')

 <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&thinsp; Inicio</a></li>
<!--  <li><a href="{{ url('usuario') }}">Administración de Usuarios</a></li> -->

@stop

@section('content')

@include ('layouts.scripts')

<div class="container">

	<div class="banner-list">

		<h1><center>Lista de Usuarios</center></h1>

		  <div class="col-md-10">
		  </div>
		  <div>
          <a class="btn btn-primary " href="{{ url('registroUsuario') }}">Nuevo registro</a> <!-- o usuario/create -->
          </div>
          <br>

			<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre de usuario</th><th>Correo electrónico</th><th>Rol</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($users as $user)
					 
						<tr><td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->rols->nombre}}</td>
						<td> <div class="twoColumns col-md-10">
						{!!link_to_route('usuario.edit', $title = 'Modificar', $parameters = $user->id, $attributes = ['class'=>'btn btn-success'])!!}

						{!!Form::open(['route'=> ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
			            {!!Form::button('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!} 
                        </div></td></tr>
					  
					@endforeach

				</tbody>

			</table>
				
	</div>

</div>

@stop


