	<div class="form-group list-group">
		{!!Form::label('nombre','Nombre *')!!}
		{!!Form::text('nombre',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre del centro de formación'])!!}

		@if ($errors->has('nombre'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('nombre') }}</strong>
            </span>
        @endif
    </div>