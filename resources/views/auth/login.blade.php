@extends('layouts.headerFooter')

@section('content')

<div class="container">

    <!-- <form id="form" method="post"> -->

    {!!Form::open(['route'=>'login.store','method'=>'POST'])!!}

        <div class="container">

            <div class="col-md-5 col-md-offset-3" "> 
                 <br>
                   
                <div class=" card-container ">

                    <div class="panel panel-info" style="background-color: #F7F7F7">

                        <div class="panel-heading">Inicio de sesión</div>
                            
                            <div class="panel-body">                                 
                            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                            <p  class="profile-name-card"></p>
                            <form class="form-signin">
                                <span id="reauth-email" class="reauth-email"></span>

                                <div class="form-group ">
                                    {!!Form::label('correo','Correo electrónico')!!}
                                    {!!Form::email('email',null,['class'=> 'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}
                                </div>

                                <div class="form-group ">
                                    {!!Form::label('contrasena','Contraseña')!!}
                                    {!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingrese la contraseña'])!!}
                                </div>

                                                               
                                <div id="remember" class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Recordarme
                                    </label>
                                </div>


                                <div>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                                </div>

                                {!!Form::submit('Iniciar sesión',['class'=>'btn btn-primary btn-block btn-signin'])!!}
                                {!!Form::close()!!}
                            
                            </form>
                            </div>

                        </div>

                    </div>
                </div>
      
            </div>
        </div>
                    <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Iniciar sesión
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form> -->

    <!-- </form> -->
    {!!Form::close()!!}

</div>

@endsection

@section('scripts')

<script type="text/javascript">

    var message = "{{Session::get('message')}}"

        if ("{{Session::has('message')}}") 
         {
            swal({
           
           title: message,
           text: '',
           type: 'error'
           })
         }

</script>

@stop
