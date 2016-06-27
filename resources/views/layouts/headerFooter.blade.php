<!DOCTYPE html>
  <html>

  <head>

  	<title>Tecnoparque</title>
    
    {!!Html::style('css/style.css')!!}
    {!!Html::style('http://fonts.googleapis.com/css?family=Montserrat:400,700')!!}
    {!!Html::style('css/sweetalert2.css')!!}
    {!!Html::style('https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css')!!}
       
  </head>

<body>

<!-- header -->

  <div class="top-header">

    <div class="container">

       <div class="logo">
           {!!Html::image('images/logot.png')!!}
       </div>      

           <nav class="top-nav">

             <ul>

               @yield("home") 
       
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                       <li><a href="{{ url('log') }}"><span class='glyphicon glyphicon-user'></span> Ingresar</a></li>

                    @else

                    @yield("home2")

                    @yield("menu")
                      
                      <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                        </ul>
                      </li>
                    @endif
                  </ul>
             </nav>

    </div>

  </div>   

<!-- Contenido de cada vista --> 

@yield("content")   

{!!Html::script('js/jquery-3.0.0.min.js')!!}

{!!Html::script('https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js')!!}
{!!Html::script('js/sweetalert2.min.js')!!}

@yield('scripts')   


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