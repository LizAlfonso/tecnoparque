@section('menu')


 <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&thinsp; Inicio</a></li>
 
 @if( Auth::user()->idRol == 1)  <!-- cambiar por el nombre del rol -->

    <li><a href="{{ url('usuario') }}">Usuarios</a></li>
    <li><a href="{{ url('servicio') }}">Servicios</a></li>
    
 @else
    <li><a href="{{ url('asistencia') }}">Asistencias</a></li>
	<li><a href="{{ url('evento') }}">Eventos</a></li>
	<li><a href="{{ url('proyecto') }}">Proyectos</a></li>
	<li><a href="{{ url('reporte') }}">Reportes</a></li>
@endif

@stop