<!DOCTYPE html>
<html>
<head>
	<title>Tecnoparque</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>

</head>
<body>

<!-- header -->

  <div class="top-header">

    <div class="container">

       <div class="logo">
           <a ><img src="images/logot.png"  /></a>
       </div>      

          <nav class="top-nav">

            <ul class="top-nav">

              <li><a href="#objetivos" class="scroll">Objetivos</a></li>
              <li><a href="#about">Qué es Tecnoparque?</a></li>
              <li><a href="#login"><span class='glyphicon glyphicon-user'></span> Ingresar</a></li>

            </ul>

          </nav>

    </div>

</div>   

<!-- Contenido de cada vista --> 

@yield("content")    


<!-- footer -->

<div  class="contact text-center">

    <div class="container">
            
              <div class="col-md-6">
               <div class="contact-left-grid">
                 <p><span class="c-mobi"> </span>57(4)576 00 00 IP: 42852 - 42253</p>
               </div>
              </div>

            
              <div class="contact-right-grid">
                <p><span class="c-msg"> </span><a href="mailto:infotpcmed@misena.edu.co">infotpcmed@misena.edu.co</a></p>    
              </div>

      <br> 

    </div>

</div>

</body>
</html>