<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;
use Tecnoparque\Http\Controllers\Controller;
use Tecnoparque\Http\Requests;
use Tecnoparque\Evento; //modelo
use Tecnoparque\Servicio; 
use Tecnoparque\Http\Requests\EventoCreateRequest;
use Tecnoparque\Http\Requests\EventoUpdateRequest;
use Session;
use Redirect;
use Auth;
use Tecnoparque\Lugar;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('infoc',['only' => 'edit']); //destroy no tiene dirección
        $this->middleware('practicante',['only' => 'create']);
        $this->middleware('dinamizador',['only' => 'index']); 
    }
    
    public function index()
    {
        $eventos = Evento::All();

            if(Auth::user()->rols->nombre == "Infocenter")
            {
                return view('evento.index',compact('eventos'));
             }
             else
             {
                return view('\evento\index2',compact('eventos'));
             }       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::lists('nombre','idServicio');
        $lugares = Lugar::lists('nombre','idLugar');
        return view('evento.create',compact('servicios','lugares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoCreateRequest $request)
    {
        Evento::create($request->all());

        return redirect('evento')->with('message','Evento registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Servicio::lists('nombre','idServicio');
        $lugares = Lugar::lists('nombre','idLugar');
        $evento = Evento::find($id);
        return view('evento.edit',['evento'=>$evento],compact('servicios','lugares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventoUpdateRequest $request, $id)
    {
        $evento = Evento::find($id);
        $evento->fill($request->all());
        $evento->save();

        Session::flash('message','Evento modificado correctamente');
        return Redirect::to('evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        Session::flash('message','Evento eliminado correctamente');
        return Redirect::to('evento');
    }
}
