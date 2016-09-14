<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Http\Requests\CentroFormacionCreateRequest;
use Tecnoparque\Http\Requests\CentroFormacionUpdateRequest;
use Tecnoparque\CentroFormacion;
use Session;
use Redirect;

class CentroFormacionController extends Controller
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
        $centro_formacions = CentroFormacion::All();
        return view('centroFormacion.index',compact('centro_formacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centroFormacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CentroFormacionCreateRequest $request)
    {
        CentroFormacion::create([
       'nombre' => $request['nombre'],
            ]);

        return redirect('centroFormacion')->with('message','Centro de formación registrado correctamente');
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
        $centroFormacion = CentroFormacion::find($id);
        return view('centroFormacion.edit',['centroFormacion'=>$centroFormacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CentroFormacionUpdateRequest $request, $id)
    {
        $centroFormacion = CentroFormacion::find($id);
        $centroFormacion->fill($request->all());
        $centroFormacion->save();

        Session::flash('message','Centro de formación modificado correctamente');
        return Redirect::to('centroFormacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centroFormacion = CentroFormacion::find($id);
        $centroFormacion->delete();
        Session::flash('message','Tipo de documento eliminado correctamente');
        return Redirect::to('centroFormacion');
    }
}
