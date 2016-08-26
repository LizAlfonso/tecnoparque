<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Ingreso;
use Tecnoparque\TipoDocumento;
use Tecnoparque\tipoPersona;
use Tecnoparque\Http\Requests\IngresoCreateRequest;
use Tecnoparque\Http\Requests\IngresoUpdateRequest;
use Session;
use Redirect;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $ingresos = Ingreso::All();
        return view('ingreso.index',compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoDocumentos = TipoDocumento::lists('nombre','idTipoDocumento');
        $tipoPersonas = TipoPersona::lists('nombre','idTipoPersona');
        return view('ingreso.create',compact('tipoDocumentos'),compact('tipoPersonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $ingreso = Ingreso::find($id);
        $persona = $ingreso->personas;    
        return view('ingreso.edit',['persona'=>$persona], compact('tipoPersonas', 'ingreso', 'persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngresoUpdateRequest $request, $id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->fill($request->all());
        $ingreso->save();

        Session::flash('message','Ingreso modificado correctamente');
        return Redirect::to('ingreso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->delete();
        Session::flash('message','Ingreso eliminado correctamente');
        return Redirect::to('ingreso');
    }
}
