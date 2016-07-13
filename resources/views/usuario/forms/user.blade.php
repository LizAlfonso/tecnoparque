	<div class="form-group list-group">
		{!!Form::label('name','Nombre de usuario *')!!}
		{!!Form::text('name',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del usuario'])!!}

		@if ($errors->has('name'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

	</div>

	<div class="form-group ">
		{!!Form::label('email','Correo electrónico *')!!}
		{!!Form::text('email',null,['class'=> 'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}

		@if ($errors->has('email'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

	</div>

    <div class="form-group">
	   {!!Form::label('idRol','Rol *')!!}
	   {!!Form::select('idRol',$nombreRol,null,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}

		@if ($errors->has('idRol'))
	 	<span class="list-group-item list-group-item-danger">
   		<strong>{{ $errors->first('idRol') }}</strong>
		</span>
		@endif
    </div>

