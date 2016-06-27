@extends('layouts.headerFooter')  

@section('home')
 <li><a href="{{ url('#objetivos') }}">Objetivos</a></li>
 <li><a href="{{ url('#about') }}">Qué es Tecnoparque?</a></li>
@stop

@section('home2')
 <li><a href="{{ url('principal') }}">Principal</a></li>
@stop

@section('content')

<div class="bg">

	  <div class="container">
		  <div class="banner-info text-center">
			 <h1 id="titulo_index">Tecnoparque nodo Medellín</h1><br />

			 <p><a class="leran-more" href="http://tecnoparquem.wix.com/oficinavirtual">Oficina Virtual</a></p>
		   </div>
       </div>

</div>

<div id="objetivos" class="services panel">

	<div class="container">

		<div class="service-head text-center">
			<h2>Objetivos</h2>
			<span> </span>
		</div>
					
		<div class="services-grids text-center">
			<div class="col-md-4">
				<div class="service-grid " >
					<span class="service-icon1"> </span>
					    <p>Generar condiciones de articulación entre gobierno, empresa y academia para el desarrollo de acciones conjuntas enfocadas hacia la innovación.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-grid " >
					<span class="service-icon2"> </span>
						<p>Propiciar escenarios para que la población colombiana con proyectos de base tecnológica y alto potencial innovador puedan materializarlos a través de prototipos funcionales y productos tecnológicos.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-grid " >
					<span class="service-icon3"> </span>
						<p>Crear espacios para garantizar la apropiación, difusión, adaptación y transferencia tecnológica desde y hacia el sector productivo.</p>
				</div>
			</div>
						
		</div>

	</div>

</div>

<div id="about" class="expertise">

<div class="col-md-8">

			<div class="expertise-head">
			<br>
			<h3>¿Qué es la Red Tecnoparque SENA?</h3>
			<p>Es un programa de innovación tecnológica del Servicio Nacional de Aprendizaje dirigida a todos los colombianos, que actúa como acelerador para el desarrollo de proyectos de I+D+i materializados en prototipos funcionales en cuatro líneas tecnológicas: Electrónica y Telecomunicaciones, , Ingeniería y diseño, Biotecnología y Nanotecnología, y Tecnologías Virtuales , que promuevan el emprendimiento de base tecnológica.</p>
			</div>
            <h2>La Red Tecnoparque Colombia promueve y estimula:</h2>
				<div class="expertise-left-inner-grids">

					<div class="e-left-inner-grid">
				 		<div class="e-left-inner-grid-left">
							<span class="e-icon1"> </span>
						</div>
						<div class="e-left-inner-grid-right">
							<p>El Sistema Nacional de conocimiento</p>
						</div>							
					</div>

					<div class="e-left-inner-grid">
						<div class="e-left-inner-grid-left">
						<span class="e-icon1"> </span>
						</div>
						<div class="e-left-inner-grid-right ">
							<p>La generación y apropiación social del conocimiento.</p>
						</div>
					</div>

					<div class="e-left-inner-grid">
						<div class="e-left-inner-grid-left">
							<span class="e-icon1"> </span>
						</div>
						<div class="e-left-inner-grid-right">
							<p>El emprendimiento y empresarismo de base tecnológica.</p>
						</div>				
					</div>

					<div class="e-left-inner-grid">
						<div class="e-left-inner-grid-left">
						   <span class="e-icon1"> </span>
						</div>
					    <div class="e-left-inner-grid-right">
						  <p>La productividad y competitividad para las empresas y las regiones de Colombia.</p>
					    </div>
					</div>
                      
                   <div class="e-left-inner-grid">
						<div class="e-left-inner-grid-left">
							<span class="e-icon1"> </span>
						</div>
						<div class="e-left-inner-grid-right">
							<p>El fortalecimiento institucional del Sevicio Nacional de Aprendizaje SENA.</p>
					    </div>
				    </div>

				    <div class="e-left-inner-grid">
					    <div class="e-left-inner-grid-left">
							<span class="e-icon1"> </span>
						</div>
						<div class="e-left-inner-grid-right">
						 <p>La articulación de las competencias básicas y avanzadas de calidad, de todas las personas que se benefician de programas integrales de formación por proyectos del SENA.</p> 
						</div>
					</div>
								
				</div>
							
</div>

<div class="col-md-4" ><img src="images/tecno.jpg " width="520"></div> 	


<div class="clearfix"> </div>

@stop


