<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Persona; 

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $gestores = Persona::select('idPersona', \DB::raw('CONCAT(nombres, " ", apellidos) AS nombre'))
            ->orderBy('nombres')
            ->where('idTipoPersona', 2)
            ->lists('nombre', 'idPersona');
        return view('reporte.index', compact('gestores'));
    }

    public function reporteAsistenciaFuera(Request $request)
    {
        $this->validate($request, [
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal');        

        $query = \DB::select('CALL reporteAsistenciaFuera(?,?)',array($fechaInicial,$fechaFinal)); 
        
        // var_dump($query[0]->total);
        // var_dump($query[0]->mediaTecnica);
        // var_dump($query[0]->aprendizSena);
        return view('reporte.reporteAsistenciaFuera', compact('query', 'fechaInicial', 'fechaFinal'));
    }

    public function reporteAsistenciaDentro(Request $request)
    {
        $this->validate($request, [
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal');        

        $query = \DB::select('CALL reporteAsistenciaDentro(?,?)',array($fechaInicial,$fechaFinal)); 
          
        return view('reporte.reporteAsistenciaDentro', compact('query', 'fechaInicial', 'fechaFinal'));
    }

    public function reporteAsistenciaCompleta(Request $request)
    {
        $this->validate($request, [
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal');                
        $query = \DB::select('CALL reporteAsistenciaCompleta(?,?)',array($fechaInicial,$fechaFinal)); 
        
        // var_dump($query[0]->total);
        // var_dump($query[0]->mediaTecnica);
        // var_dump($query[0]->aprendizSena);
        return view('reporte.reporteAsistenciaCompleta', compact('query', 'fechaInicial', 'fechaFinal'));
    }

    public function reporteGestores(Request $request)
    {
        $this->validate($request, [
            'gestor' => 'required',
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $gestor = $request->input('gestor');  
        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal'); 
                
        $nombreGestor = Persona::where('idPersona', '=', $gestor)->first();
        $query = \DB::select('CALL reporteGestores(?,?,?)',array($gestor,$fechaInicial,$fechaFinal));        
        
        return view('reporte.reporteGestores', compact('nombreGestor', 'query', 'fechaInicial', 'fechaFinal'));
    }

    public function reporteGestoresCompleto(Request $request)
    {
        $this->validate($request, [            
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal'); 
                        
        $query = \DB::select('CALL reporteGestoresCompleto(?,?)',array($fechaInicial,$fechaFinal));        
        
        return view('reporte.reporteGestoresCompleto', compact('query', 'fechaInicial', 'fechaFinal'));
    }    

    public function reporteIngresos(Request $request)
    {
        $this->validate($request, [
            'fechaInicial' => 'required|date|before:fechaFinal',
            'fechaFinal' => 'required|date|after:fechaInicial',
        ]);

        $fechaInicial = $request->input('fechaInicial');
        $fechaFinal = $request->input('fechaFinal');        

        $query = \DB::select('CALL reporteIngresos(?,?)',array($fechaInicial,$fechaFinal)); 
          
        return view('reporte.reporteIngresos', compact('query', 'fechaInicial', 'fechaFinal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
