{!!Html::script('js/jquery-3.0.0.min.js')!!}

<div class="form-group ">
	{!!Form::label('idServicio','Servicio *')!!}
	{!!Form::select('idServicio',$servicios,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}

	@if ($errors->has('idServicio'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('idServicio') }}</strong>
		</span>
	@endif
</div>

<div class="form-group list-group">
	{!!Form::label('nombre','Nombre *')!!}
	{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del evento'])!!}

	@if ($errors->has('nombre'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('nombre') }}</strong>
		</span>
	@endif
</div>

<div class="form-group list-group">
	{!!Form::label('fecha','Fecha *')!!}
	{!!Form::text('fecha',null,['id'=>'idDP','class'=>'form-control','placeholder'=>'aaaa/mm/dd'])!!}

	@if ($errors->has('fecha'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('fecha') }}</strong>
		</span>
	@endif
</div>

<div class="form-group list-group">
	{!!Form::label('hora','Hora *')!!}
	{!!Form::time('hora',null,['class'=>'form-control'])!!}

	@if ($errors->has('hora'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('hora') }}</strong>
		</span>
	@endif
</div>

<div class="form-group ">
	{!!Form::label('lugar','¿El evento se realizará dentro o fuera de Tecnoparque? * ')!!}
	{!! Form::select('lugar', ['Dentro' => 'Dentro', 'Fuera' => 'Fuera'], null, ['class' => 'form-control','placeholder'=>'Seleccione','id'=>'lugar']) !!}

	@if ($errors->has('lugar'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('lugar') }}</strong>
		</span>
	@endif

</div>

<!-- Modificar -->
<div class="form-group " id="piso" name="piso" hidden="true">
	{!!Form::label('lugarEspecifico','¿En cuál piso?')!!}
	{!! Form::select('lugarEspecifico', ['Piso 6' => 'Piso 6', 'Piso 7' => 'Piso 7'], null, ['class' => 'form-control','placeholder'=>'Seleccione']) !!}

</div>

<div class="form-group " id="lugarO" name="lugarO" hidden="true">
	{!!Form::label('lugarEspecifico','¿En qué lugar?')!!}
	{!!Form::text('lugarEspecifico',null,['class'=> 'form-control','placeholder'=>'Ingrese el lugar del evento'])!!}

</div>

<div id="divLugar" class="form-group">
	
</div>

<div class="form-group list-group">
	{!!Form::label('cupos','Cupos')!!}
	{!!Form::number('cupos',null,['class'=> 'form-control','placeholder'=>'Ingrese los cupos disponibles'])!!}

	@if ($errors->has('cupos'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('cupos') }}</strong>
		</span>
	@endif
</div>

<div class="form-group ">
	{!!Form::label('descripcion','Descripción')!!}
	{!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese la descripción del evento'])!!}

	@if ($errors->has('descripcion'))
		<span class="list-group-item list-group-item-danger">
			<strong>{{ $errors->first('descripcion') }}</strong>
		</span>
	@endif
</div>




