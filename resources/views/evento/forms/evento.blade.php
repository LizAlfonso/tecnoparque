   @include ('layouts.scripts')

    <div class="form-group ">
        {!!Form::label('idServicio','Servicio *')!!}

    </div>

    <div class="form-group list-group">
		{!!Form::label('nombre','Nombre *')!!}
		{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del evento'])!!}

		@if ($errors->has('nombre'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('nombre') }}</strong>
            </span>
        @endif
	</div>

    <div class="form-group list-group">
    {!!Form::label('fecha','Fecha *')!!}
    {!!Form::text('fecha',null,['id'=>'idDP','class'=>'form-control','placeholder'=>'dd/mm/aaaa'])!!}
    </div>

    <div class="form-group list-group">
    {!!Form::label('hora','Hora *')!!}
<!--     {!!Form::selectRange('horas',1,12) !!} -->
    <!-- {!!Form::selectRange('minutos',0,59) !!} -->
    <input type="time" name="hora" class="form-control">
 <!--    {!!Form::select('jornada', array('am' => 'am', 'pm' => 'pm'), null) !!} -->
    </div>

    <div class="form-group list-group">
        {!!Form::label('lugar','Lugar')!!}
        {!!Form::text('lugar',null,['class'=> 'form-control','placeholder'=>'Ingresa el lugar donde se realiza el evento'])!!}

        @if ($errors->has('lugar'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('lugar') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group list-group">
		{!!Form::label('cupo','Cupos')!!}
		{!!Form::text('cupo',null,['class'=> 'form-control','placeholder'=>'Ingresa los cupos disponibles'])!!}

		@if ($errors->has('cupo'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('cupo') }}</strong>
            </span>
        @endif
	</div>

	<div class="form-group ">
		{!!Form::label('descripcion','Descripción')!!}
		{!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingresa la descripción del evento'])!!}

		@if ($errors->has('descripcion'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
        @endif
	</div>

    <div class="form-group ">
        {!!Form::label('externo','Seleccione si el evento se realizará fuera de Tecnoparque? ')!!}
        <input type="checkbox", name="externo">
    </div>

 