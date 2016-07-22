<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;
use Tecnoparque\Http\Controllers\Controller;
use Tecnoparque\Http\Requests;
use Tecnoparque\Persona;
use Tecnoparque\TipoDocumento;
use Tecnoparque\TipoPersona;
use Tecnoparque\Http\Requests\PersonaCreateRequest;
use Session;
use Redirect;

class PersonaController extends Controller
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
        $personas = Persona::All();
        return view('persona.index',compact('personas'));
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
        return view('persona.create',compact('tipoDocumentos'),compact('tipoPersonas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaCreateRequest $request)
    {
        Persona::create($request->all());

        return redirect('persona')->with('message','Persona registrada correctamente');
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
        $tipoDocumentos = TipoDocumento::lists('nombre','idTipoDocumento');
        $tipoPersonas = TipoPersona::lists('nombre','idTipoPersona');
        $persona = Persona::find($id);
        return view('persona.edit',['persona'=>$persona],compact('tipoDocumentos','tipoPersonas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //  'numeroIdentificacion' => 'required|unique:personas',
        //  'idTipoDocumento' => 'required',
        //  'idTipoPersona' => 'required',
        //  'nombres'=> 'required',
        //  'apellidos'=> 'required',
        //  'correo'=> 'required|email|unique:personas,correo,'.$persona->idPersona,
        // ]);

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
        $persona = Persona::find($id);
        $persona->delete();
        Session::flash('message','Persona eliminada correctamente');
        return Redirect::to('persona');
    }
}
