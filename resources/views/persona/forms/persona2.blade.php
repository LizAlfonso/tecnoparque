<div class="form-group list-group">
        {!!Form::label('nombres','Nombres *')!!}
        {!!Form::text('nombres',null,['class'=> 'form-control','placeholder'=>'Ingrese los nombres'])!!}

        @if ($errors->has('nombres'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('nombres') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group list-group">
        {!!Form::label('apellidos','Apellidos *')!!}
        {!!Form::text('apellidos',null,['class'=> 'form-control','placeholder'=>'Ingrese los apellidos'])!!}

        @if ($errors->has('apellidos'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('apellidos') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group ">
        {!!Form::label('genero','Género')!!}
        {!! Form::select('genero', ['1' => 'Femenino', '2' => 'Masculino'], null, ['class' => 'form-control','placeholder'=>'Seleccione' ]) !!}

    </div>

    <div class="form-group ">
        {!!Form::label('correo','Correo electrónico *')!!}
        {!!Form::text('correo',null,['class'=> 'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}

        @if ($errors->has('correo'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('correo') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group list-group">
        {!!Form::label('telefono','Teléfono')!!}
        {!!Form::text('telefono',null,['class'=> 'form-control','placeholder'=>'Ingrese el número telefónico'])!!}

        @if ($errors->has('telefono'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('telefono') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group list-group">
        {!!Form::label('celular','Celular')!!}
        {!!Form::number('celular',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de celular'])!!}

        @if ($errors->has('celular'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('celular') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group list-group">
        {!!Form::label('empresa','Empresa')!!}
        {!!Form::text('empresa',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre de la empresa a la que pertenece'])!!}

        @if ($errors->has('empresa'))
            <span class="list-group-item list-group-item-danger">
                <strong>{{ $errors->first('empresa') }}</strong>
            </span>
        @endif
    </div>