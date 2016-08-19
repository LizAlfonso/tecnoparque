<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Ingreso;
use Tecnoparque\TipoDocumento;
use Tecnoparque\tipoPersona;

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
        return view('ingreso.create');
    }
  
        public function buscar()
    {
        return "buscando";
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

        $tipoPersonas = TipoPersona::lists('nombre','idTipoPersona');
        $persona = $ingreso->personas;
        // $tipo =  $ingreso->personas->tipoDocumentos::lists('nombres', 'id_')
        // $tipo = DB::table('personas')->where('name', 'John')->value('idTipoDocumento');       
        return view('ingreso.edit', compact('tipoPersonas', 'ingreso', 'persona'));
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
        $persona = Persona::find($id);      
        $persona->fill($request->all());
        $persona->save();

        Session::flash('message','Persona modificada correctamente');
        return Redirect::to('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
