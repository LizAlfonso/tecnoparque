<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;

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
    	return view('principal');
    }

}
