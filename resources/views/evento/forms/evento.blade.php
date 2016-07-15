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
<!--     {!!Form::selectRange('horas',1,12) !!} -->
    <!-- {!!Form::selectRange('minutos',0,59) !!} -->
    <!-- <input type="time" name="hora" class="form-control"> -->
    {!!Form::time('hora',null,['class'=>'form-control'])!!}

    @if ($errors->has('hora'))
      <span class="list-group-item list-group-item-danger">
          <strong>{{ $errors->first('hora') }}</strong>
      </span>
    @endif
    </div>

     <div class="form-group ">
     {!!Form::label('lugar','¿El evento se realizará dentro o fuera de Tecnoparque? * ')!!}

     <div class="controls">
       <select id="lugar" name="lugar" class="form-control" placeholder ="Seleccione">
         <option value="" selected>Seleccione</option>
         <option value="dentro">Dentro</option>
         <option value="fuera">Fuera</option>       
       </select>         
     </div>

     @if ($errors->has('lugar'))
      <span class="list-group-item list-group-item-danger">
          <strong>{{ $errors->first('lugar') }}</strong>
      </span>
    @endif

  </div>

   <!-- <input type="checkbox", name="externo", value="1"> -->

   <div class="form-group " id="lugarEspecifico" name="lugarEspecifico" hidden="true">
   {!!Form::label('lugarEspecifico','¿En cuál piso?')!!}

   <div class="controls form-group">
       <select name="lugarEspecifico" class="form-control">
         <option value="" selected>Seleccione</option>
         <option value="piso 6">Piso 6</option>
         <option value="piso 7">Piso 7</option>       
       </select>         
    </div>

   </div>

    <div class="form-group " id="centro" name="lugarEspecifico" hidden="true">
    {!!Form::label('centro','¿En cuál Centro de formación?')!!}

    <div class="controls form-group">
       <select id="lugarEspecifico" name="lugarEspecifico" class="form-control">
         <option value="" selected>Seleccione</option>
         <option value="CESGE">Centro de Gestión Empresarial</option>
         <option value="Pedregal">Pedregal</option>       
       </select>         
    </div>

         @if ($errors->has('lugarEspecifico'))
      <span class="list-group-item list-group-item-danger">
          <strong>{{ $errors->first('lugarEspecifico') }}</strong>
      </span>
    @endif

     </div>
 
      <script type="text/javascript">
        $(document).ready(function(){   
          $("#lugar").change(function(){
            if($("#lugar option:selected").val() =="dentro"){
                $("#centro").hide();
              $("#lugarEspecifico").show();
            }else if($("#lugar option:selected").val() =="fuera"){
               $("#lugarEspecifico").hide();
              $("#centro").show();
            }else{
              $("#centro").hide();
              $("#lugarEspecifico").hide();
            }
          }
          );        
        });
      </script>

    <div class="form-group list-group">
		{!!Form::label('cupos','Cupos')!!}
		{!!Form::number('cupos',null,['class'=> 'form-control','placeholder'=>'Ingrese los cupos disponibles'])!!}
	</div>

	<div class="form-group ">
		{!!Form::label('descripcion','Descripción')!!}
		{!!Form::text('descripcion',null,['class'=> 'form-control','placeholder'=>'Ingrese la descripción del evento'])!!}
	</div>



 