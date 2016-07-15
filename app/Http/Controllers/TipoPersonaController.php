<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Http\Requests\TipoPersonaCreateRequest;
use Tecnoparque\Http\Requests\TipoPersonaUpdateRequest;
use Tecnoparque\TipoPersona;
use Session;
use Redirect;

class TipoPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        $tipo_personas = TipoPersona::All();
        return view('tipoPersona.index',compact('tipo_personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoPersona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoPersonaCreateRequest $request)
    {
        TipoPersona::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('tipoPersona')->with('message','Tipo de persona registrado correctamente');
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
        $tipoPersona = TipoPersona::find($id);
        return view('tipoPersona.edit',['tipoPersona'=>$tipoPersona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoPersonaUpdateRequest $request, $id)
    {
        $tipoPersona = TipoPersona::find($id);
        $tipoPersona->fill($request->all());
        $tipoPersona->save();

        Session::flash('message','Tipo de persona modificado correctamente');
        return Redirect::to('tipoPersona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoPersona = TipoPersona::find($id);
        $tipoPersona->delete();
        Session::flash('message','Tipo de persona eliminado correctamente');
        return Redirect::to('tipoPersona');
    }
}
