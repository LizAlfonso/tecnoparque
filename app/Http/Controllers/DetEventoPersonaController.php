<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;
use Tecnoparque\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Tecnoparque\DetEventoPersona;
use Tecnoparque\Evento;
use Tecnoparque\Persona;
use DB;

class DetEventoPersonaController extends Controller
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
    
    public function index($id)
    {
        $evento = Evento::find($id);
        $personas = Persona::All();
       // $asistencias = DetEventoPersona::All();
        return view('asistencia.index',compact('evento','personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asistencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {     

        if ($request->ajax()) {
            $arrayAsistencia = $request->all(); 
        }  

<<<<<<< HEAD
        // var_dump($arrayAsistencia["data"]);

=======
>>>>>>> refs/remotes/origin/Lizä
        $idEvento = $arrayAsistencia["data"][0]["idEvento"];

        $array = [];

        $evento = Evento::find($idEvento);
      
        if ($arrayAsistencia["data"][0]["idPersona"] == null) {
            $array = [];
        } else {
            for ($i=0; $i < count($arrayAsistencia["data"]); $i++) {                 
                $array[$arrayAsistencia["data"][$i]["idPersona"]] = ['responsable' => $arrayAsistencia["data"][$i]["responsable"]];
            }
        }
<<<<<<< HEAD

        var_dump("<br>");
        var_dump($array);
                
        $emptyArray = [];

        // try {
        //     $evento->personas()->sync($array); 
        //     return true;
        // }catch(\Exception $e){
        //     return false;
        // }

        if (count($evento->personas()->sync($array))) {
            // do something
        }

=======
                
        $emptyArray = [];

>>>>>>> refs/remotes/origin/Lizä
        return $evento->personas()->sync($array); 

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
