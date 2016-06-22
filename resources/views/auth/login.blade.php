@extends('layouts.headerFooter')

@section('content')
@include('alerts.errors')

<div class="container">

    <!-- <form id="form" method="post"> -->

    {!!Form::open(['route'=>'login.store','method'=>'POST'])!!}

        <div class="container">

            <div class="col-md-5 col-md-offset-3" "> 
                   
                <div class=" card-container ">

                    <div class="panel panel-info" style="background-color: #F7F7F7">

                        <div class="panel-heading">Inicio de sesión</div>
                            
                            <div class="panel-body">                                 
                            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                            <p  class="profile-name-card"></p>
                            <form class="form-signin">
                                <span id="reauth-email" class="reauth-email"></span>
                                <!-- <input type="text" id="inputEmail" class="form-control" name="txtUsuario" placeholder="Ingresa el correo electrónico" required autofocus>
                                <input type="password" id="inputPassword" class="form-control" name="txtPass" placeholder="Contraseña" required> -->

                                <div class="form-group ">
                                    {!!Form::label('correo','Correo electrónico')!!}
                                    {!!Form::email('email',null,['class'=> 'form-control','placeholder'=>'Ingresa el correo electrónico'])!!}
                                </div>

                                <div class="form-group ">
                                    {!!Form::label('contrasena','Contraseña')!!}
                                    {!!Form::password('password',['class'=> 'form-control','placeholder'=>'Ingresa la contraseña'])!!}
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

                                <!-- <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnLogin" id="btnLogin" value="Iniciar sesión"></input> -->
                            
                            </form>
                            </div>

                        </div>

                    </div>
                </div>
      
            </div>
        </div>
                    <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

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