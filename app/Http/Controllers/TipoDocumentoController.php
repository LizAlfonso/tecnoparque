<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Http\Requests\TipoDocumentoCreateRequest;
use Tecnoparque\Http\Requests\TipoDocumentoUpdateRequest;
use Tecnoparque\TipoDocumento;
use Session;
use Redirect;

class TipoDocumentoController extends Controller
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
        $tipo_documentos = TipoDocumento::All();
        return view('tipoDocumento.index',compact('tipo_documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoDocumento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoDocumentoCreateRequest $request)
    {
        TipoDocumento::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('tipoDocumento')->with('message','Tipo de documento registrado correctamente');
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
        $tipoDocumento = TipoDocumento::find($id);
        return view('tipoDocumento.edit',['tipoDocumento'=>$tipoDocumento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoDocumentoUpdateRequest $request, $id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->fill($request->all());
        $tipoDocumento->save();

        Session::flash('message','Tipo de documento modificado correctamente');
        return Redirect::to('tipoDocumento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->delete();
        Session::flash('message','Tipo de documento eliminado correctamente');
        return Redirect::to('tipoDocumento');
    }
}
