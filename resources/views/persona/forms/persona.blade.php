    <div class="form-group list-group">
        {!!Form::label('numeroIdentificacion','Número de identificación *')!!}
        {!!Form::text('numeroIdentificacion',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

        @if ($errors->has('numeroIdentificacion'))
            <span class="list-group-item list-group-item-danger">
               <strong>{{ $errors->first('numeroIdentificacion') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group ">
        {!!Form::label('idTipoDocumento','Tipo de documento *')!!}
        {!!Form::select('idTipoDocumento',$tipoDocumentos,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}

       @if ($errors->has('idTipoDocumento'))
         <span class="list-group-item list-group-item-danger">
           <strong>{{ $errors->first('idTipoDocumento') }}</strong>
         </span>
       @endif
    </div>

    <div class="form-group ">
        {!!Form::label('idTipoPersona','Tipo de persona *')!!}
        {!!Form::select('idTipoPersona',$tipoPersonas,null,['placeholder'=>'Seleccione','class'=>'form-control'])!!}

       @if ($errors->has('idTipoPersona'))
         <span class="list-group-item list-group-item-danger">
           <strong>{{ $errors->first('idTipoPersona') }}</strong>
         </span>
       @endif
    </div>

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
 
    <div class="controls form-group">
       <select class="form-control" placeholder ="Seleccione">
         <option value="" selected>Seleccione</option>
         <option value="0">Femenino</option>
         <option value="1">Masculino</option>       
       </select>         
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
        {!!Form::number('telefono',null,['class'=> 'form-control','placeholder'=>'Ingrese el número telefónico'])!!}
    </div>

    <div class="form-group list-group">
        {!!Form::label('celular','Celular')!!}
        {!!Form::number('celular',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de celular'])!!}
    </div>

    <div class="form-group list-group">
        {!!Form::label('empresa','Empresa')!!}
        {!!Form::text('empresa',null,['class'=> 'form-control','placeholder'=>'Ingrese el nombre de la empresa a la que pertenece'])!!}
    </div>


