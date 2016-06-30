<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Auth;
use Redirect;

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
        if(Auth::user()->idRol == 1)
            {
                return Redirect::to('usuario');
            }
            else
            {
                return view('principal');
            }       
    }

}
