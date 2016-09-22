<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;
use Tecnoparque\Http\Requests;
use Tecnoparque\LineaTecnologica;
use Tecnoparque\Http\Requests\LineaTecnologicaCreateRequest;
use Tecnoparque\Http\Requests\LineaTecnologicaUpdateRequest;
use Redirect;
use Session;

class LineaTecnologicaController extends Controller
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
        $lineaTecnologicas = LineaTecnologica::All();
        return view('lineaTecnologica.index',compact('lineaTecnologicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lineaTecnologica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LineaTecnologicaCreateRequest $request)
    {
        LineaTecnologica::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('lineaTecnologica')->with('message','Línea tecnológica registrada correctamente');
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
        $lineaTecnologica = LineaTecnologica::find($id);
        return view('lineaTecnologica.edit',['lineaTecnologica'=>$lineaTecnologica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LineaTecnologicaUpdateRequest $request, $id)
    {
        $lineaTecnologica = LineaTecnologica::find($id);
        $lineaTecnologica->fill($request->all());
        $lineaTecnologica->save();

        Session::flash('message','Línea tecnológica modificada correctamente');
        return Redirect::to('lineaTecnologica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lineaTecnologica = LineaTecnologica::find($id);
        $lineaTecnologica->delete();
        Session::flash('message','Línea tecnológica eliminada correctamente');
        return Redirect::to('lineaTecnologica');
    }
}
