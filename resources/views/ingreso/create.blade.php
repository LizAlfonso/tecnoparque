@extends('layouts.headerFooter')  
@include ('layouts.menuHeader')
@include ('layouts.scripts')

@section('content')

{!!Form::open(['route'=>'ingreso.store', 'method'=>'POST'])!!}

	<div class="container" >

		<div>
		<br><br>
		 	{!!link_to_route('ingreso.index', $title = '', null, $attributes = 	['class'=>'btn btn-warning glyphicon glyphicon-arrow-left'])!!}	
		</div>

		<div class="banner-data">

			<div class=" text-center ">
			<h1>Registro de Ingreso</h1>
		    </div>

		    <br>

		    <div class="form-group list-group">
			    <div class="input-group">
					<input type="number" class="form-control" placeholder="Ingrese el número de identificación">
					<span class="input-group-btn">
						<button id="btnBuscar" class="btn btn-info" type="button">Buscar</button>
					</span>
			    </div>
  			</div>

		    @include('ingreso.forms.ingreso')

			<div class="form-group ">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			</div> 

		</div>

	</div>

{!!Form::close()!!}

@stop

<script type="text/javascript">
	$("#tblVinculos").on('click', '.delete', function () {
        var tr = $(this).closest('tr');
        tr.remove();

        var tbody = $("#tblVinculos tbody");
        console.log("leg" + tbody.children().length);
        if (tbody.children().length == 0) {
            console.log("asd assss");
            $("#divTablaVinculos").css('display', 'none');

        }

        array.splice($(this).closest('tr').index(), 1);

        $.ajax({
            type: "POST",
            url: "@Url.Content("arrayBeneficiario")",
            contentType: "application/json; charset=UTF-8",
            traditional: true,
            data: JSON.stringify({ array: array })

        });

    });
</script>