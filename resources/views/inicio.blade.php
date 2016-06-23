@extends('layouts.headerFooter')  
@section('content')

			<div  class="services">
				<div class="container">
                      <ol class="breadcrumb">
                         <!--  <li class="active"><a href="registrog.php">Inicio</a></li> -->
                         <li ><a href="{{ url('/') }}">Inicio</a></li>
                      </ol>
					<div class="service-head text-center">
						<h2>Registros</h2>
						<span> </span>
					</div>
					<div class="services-grids text-center">
						<div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon2"> </span>
                                <!-- <a href="./tecno/insertart.php"><h3>Registro de talento</h3></a> -->
                                <a href="insertart.php"><h3>Registro de talento</h3></a>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon2"> </span>
                                <!-- <a href="./tecno/insertarp.php"><h3>Registro de proyectos</h3></a> -->
                                <a href="insertarp.php"><h3>Registro de proyectos</h3></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon2"> </span>
                                <!-- <a href="./tecno/busquedaeve.php"><h3>Búsqueda de eventos</h3></a> -->
                                <a href="busquedaeve.php"><h3>Búsqueda de eventos</h3></a>
							</div>
						</div>
                                <div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon1"> </span>
                                <!-- <a href="./tecno/busquedau.php"><h3>Búsqueda de usuarios</h3></a> -->
                                <a href="busquedau.php"><h3>Búsqueda de usuarios</h3></a>
							</div>
						</div>
			
                        <div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon2"> </span>
                                <a href="busquedap.php"><h3>Búsqueda de proyectos</h3></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>

@stop