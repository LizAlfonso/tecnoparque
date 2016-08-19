@section('scripts')

<script type="text/javascript">

$('.btn-danger:not(.quitar)').click(function()
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


    $("#idDP").datepicker(
    {
    	format: "yyyy/mm/dd",
    	language: "es"
    })

</script>

@stop