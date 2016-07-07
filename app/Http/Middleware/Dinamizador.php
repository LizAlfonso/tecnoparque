<?php

namespace Tecnoparque\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Tecnoparque\Rol;

class Dinamizador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this -> auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $rolId = $this->auth->User()->idRol;

        $rol = Rol::find($rolId);
        $nombre = $rol->nombre;
  
        if( $nombre != 'Dinamizador' and $nombre != 'Practicante'and $nombre != 'Infocenter')
        {
            return redirect()->to('/');
        }
        return $next($request);
    }
}
