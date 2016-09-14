@section('menu')

 <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&thinsp; Inicio</a></li>
 
 @if( Auth::user()->rols->nombre == "Administrador")  

    <li><a href="{{ url('usuario') }}">Usuarios</a></li>
    <li><a href="{{ url('centroFormacion') }}">Centros</a></li>
    <li><a href="{{ url('servicio') }}">Servicios</a></li>
    <li><a href="{{ url('tipoDocumento') }}">Tipos documento</a></li>
    <li><a href="{{ url('tipoPersona') }}">Tipos persona</a></li>
        <li><a href="{{ url('lineaTecnologica') }}">Líneas tecnológicas</a></li>
    
   @elseif(Auth::user()->rols->nombre != "Gestor")
      <li><a href="{{ url('persona') }}">Personas</a></li> 
      <li><a href="{{ url('ingreso') }}">Ingresos</a></li>
      <li><a href="{{ url('evento') }}">Eventos</a></li>
      <li><a href="{{ url('pruebaAjax') }}">Ajax</a></li>
   @else

  <li><a href="{{ url('persona') }}">Personas</a></li>  

 @endif

@stop