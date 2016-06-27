@extends('layouts.headerFooter') 

@section('menu')

 <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&thinsp; Inicio</a></li>
 <li><a href="{{ url('asistencia') }}">Asistencias</a></li>
 <li><a href="{{ url('evento') }}">Eventos</a></li>
 <li><a href="{{ url('proyecto') }}">Proyectos</a></li>
 <li><a href="{{ url('reporte') }}">Reportes</a></li>

@stop

@section('content')

<img src="images/nodo.jpg" width="1582" class="img-responsive" >

@stop