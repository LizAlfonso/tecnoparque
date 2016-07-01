<?php

namespace Tecnoparque\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;
use Tecnoparque\Rol;
use Tecnoparque\User;

class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $auth;

    public function __construct(Guard $auth)
    {
        $this -> auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $rolId = $this->auth->User()->idRol;

        $rol = Rol::find($rolId);
        $nombre = $rol->nombre;
  
        if( $nombre != 'Administrador')
        {
            return redirect()->to('/');
        }
        return $next($request);
    }
}
