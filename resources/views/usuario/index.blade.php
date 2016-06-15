@extends('layouts.headerFooter')

@section('content')

<div class="container">

	<div class="banner-list">

		<h1><center>Lista de Usuarios</center></h1>

		  <br>

			<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

				<thead>

				<tr><th>Nombre de usuario</th><th>Correo electrónico</th><th>Operación</th></tr>

				</thead>

				 <tbody>

					@foreach($users as $user)
					 
						<tr><td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td> <div class="twoColumns col-md-8">
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

@section('scripts')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
          "aoColumnDefs":
          [
            {
              'bSortable': false, 'aTargets': [2]
            }

          ],
          
          "oLanguage":
          {
            "sUrl": "../resources/lang/Espanhol.json"
          }

        });   
    });

$('.btn-danger').click(function()
	{
		var form1= $(this).closest("form");

		swal({
			    title: 'Está seguro que desea eliminarlo?',
				text: "",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText:"Cancelar",
				confirmButtonText: 'Sí, eliminarlo!'
			 }).then(function() 
			 {
			 	form1.submit();

				 swal(
			     'Eliminado!',
			     'Ha sido eliminado correctamente.',
			     'success'
				   );
			 });

		 });



	var message = "{{Session::get('message')}}"

		if ("{{Session::has('message')}}") 
		 {
		 	swal(
				  message,
				  '',
				  'success'
                 )
		 }

</script>

@stop
