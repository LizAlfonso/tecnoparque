@extends('layouts.headerFooter')

@section('content')

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
<!-- 

 {!!Form::open(['route'=> ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}


			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}


{!!Form::close()!!} -->

		</div>

	</div>


@stop


<!-- //    $('.btn-danger').click(function()
	// {
	// 	var form1= $(this).closest("form");

	// 	swal({
	// 		    title: 'Está seguro que desea eliminarlo?',
	// 			text: "",
	// 			type: 'warning',
	// 			showCancelButton: true,
	// 			confirmButtonColor: '#3085d6',
	// 			cancelButtonColor: '#d33',
	// 			cancelButtonText:"Cancelar",
	// 			confirmButtonText: 'Sí, eliminarlo!'
	// 		 }).then(function() 
	// 		 {
	// 		 	form1.submit();

	// 			 swal(
	// 		     'Eliminado!',
	// 		     'Ha sido eliminado correctamente.',
	// 		     'success'
	// 			   );
	// 		 });

	// 	 });


	// var message = "{{Session::get('message')}}"

	// 	if ("{{Session::has('message')}}") 
	// 	 {
	// 	 	swal(
	// 			  message,
	// 			  '',
	// 			  'success'
 //                 )
	// 	 }
 -->


    <!--  $('button#botonE').on('click', function(){
    	// var form1= $(this).closest("form");

    	swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  swal(
  	// form1.submit();
  	'route'=>'usuario.destroy','(this).$attributes', 'method'=>'DELETE'
    'Deleted!',
    'Your file has been deleted.',
    'success'
  );
}) -->

  <!-- // swal({   
  //   title: "Are you sure?",
  //   text: "You will not be able to recover this lorem ipsum!", 
  //   type: "warning",   
  //   showCancelButton: true,   
  //   confirmButtonColor: "#DD6B55",
  //   confirmButtonText: "Yes, delete it!", 
  //   closeOnConfirm: false 
  // }, 
  //      function(){   
  //      	form1.submit();
  //  // $("#myform").submit();
  //  // method=>'DELETE'
  //  // 'route'=>'usuario.destroy','', 'method'=>'DELETE'

  // // {!!link_to_route('usuario.destroy', $parameters = $user->id, $attributes = ['method'=>'DELETE'])!!}

  // }); -->