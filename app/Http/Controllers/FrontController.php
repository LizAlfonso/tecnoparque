<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Auth;
use Redirect;
use Tecnoparque\Rol;

class FrontController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only' => 'principal']);
    }
    
    public function index()
    {
    	return view('index');

    }

    public function log()
    {
    	return view('auth/login');
    }


    public function principal()
    { 	         
        $rolId = Auth::user()->idRol;
        $rol = Rol::find($rolId);
        $nombre = $rol->nombre;

        if($nombre == 'Administrador')
            {
                return Redirect::to('usuario');
            }
            else
            {
                return view('principal');
            }       
    }

}
