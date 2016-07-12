	<div class="form-group list-group">
		{!!Form::label('nombre','Nombre *')!!}
		{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingresa el nombre del tipo de documento'])!!}

		@if ($errors->has('nombre'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('nombre') }}</strong>
            </span>
        @endif
    </div>