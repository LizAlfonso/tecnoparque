    <div class="form-group list-group">
        {!!Form::label('numeroIdentificacion','Número de identificación *')!!}
        {!!Form::number('numeroIdentificacion',null,['class'=> 'form-control','placeholder'=>'Ingrese el número de identificación'])!!}

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
        {!!Form::select('idTipoPersona',$tipoPersonas,null,['placeholder'=>'Seleccione','id'=>'tipoP','class'=>'form-control'])!!}

       @if ($errors->has('idTipoPersona'))
         <span class="list-group-item list-group-item-danger">
           <strong>{{ $errors->first('idTipoPersona') }}</strong>
         </span>
       @endif
    </div>

    <div id="divGAI" class="form-group">
        
    </div>



