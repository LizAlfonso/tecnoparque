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
        {!!Form::label('horaIngreso','Hora de ingreso')!!}
        {!!Form::time('horaIngreso',null,['class'=>'form-control'])!!}

        @if ($errors->has('horaIngreso'))
          <span class="list-group-item list-group-item-danger">
              <strong>{{ $errors->first('horaIngreso') }}</strong>
          </span>
        @endif
        </div>

        <div class="form-group list-group">
            {!!Form::label('descripcion','Descripción')!!}
            {!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese el motivo de la visita'])!!}
        </div>

        <div class="form-group list-group">
        {!!Form::label('horaSalida','Hora de salida')!!}
        {!!Form::time('horaSalida',null,['class'=>'form-control'])!!}

        @if ($errors->has('horaSalida'))
          <span class="list-group-item list-group-item-danger">
              <strong>{{ $errors->first('horaSalida') }}</strong>
          </span>
        @endif
    </div>

