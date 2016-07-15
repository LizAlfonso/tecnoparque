@extends('layouts.headerFooter')

@include ('layouts.menuHeader')

@section('content')

@include ('layouts.scripts')
@include ('layouts.scriptDataTable4')

<div class="container">

	<div class="banner-data2">

		<h1><center>Lista de Usuarios</center></h1>
		<br>

		  <div class="col-md-10">
		  </div>
		  <div>
          {!!link_to_route('usuario.create', $title = 'Nuevo registro',null,$attributes = ['class'=>'btn btn-primary'])!!}
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


