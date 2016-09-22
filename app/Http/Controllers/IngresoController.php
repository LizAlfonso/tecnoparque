<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;

use Tecnoparque\Http\Requests;
use Tecnoparque\Ingreso;
use Tecnoparque\TipoDocumento;
use Tecnoparque\tipoPersona;
use Tecnoparque\Persona; 
use Tecnoparque\CentroFormacion;
use Tecnoparque\Http\Requests\IngresoCreateRequest;
use Tecnoparque\Http\Requests\IngresoUpdateRequest;
use Session;
use Redirect;
use Auth;

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
        $this->middleware('infoc',['only' => 'edit']); //destroy no tiene dirección
        $this->middleware('practicante',['only' => 'create']);
        $this->middleware('dinamizador');
    }
    
    public function index()
    {
        $ingresos = Ingreso::All();

        if(Auth::user()->rols->nombre == "Infocenter")
        {
            return view('ingreso.index',compact('ingresos'));
        }
        else
        {
            return view('\ingreso\index2',compact('ingresos'));
        }
        
    }

    public function consultarNumeroIdentificacion(Request $request)
    {
        if ($request->ajax()) {

            $numeroIdentificacion = $request["id"];

            // var_dump($numeroIdentificacion);

            // $query = Persona::select(\DB::raw('CONCAT(nombres, " ", apellidos) AS nombres, numeroIdentificacion', 'tipo_personas.nombre', 'personas.correo'))
            //     ->join('tipo_personas', 'personas.idTipoPersona', '=', 'tipo_personas.idTipoPersona')
            //     ->where('numeroIdentificacion', '=', $numeroIdentificacion)
            //     ->get();

            // $query = Persona::select('correo', \DB::raw('CONCAT(nombres, " ", apellidos) AS nombres'))
            //     ->table('tipo_personas')->select('nombre')
            //     ->join('tipo_personas', 'personas.idTipoPersona', '=', 'tipo_personas.idTipoPersona')
            //     ->where('numeroIdentificacion', '=', $numeroIdentificacion)
            //     ->get();

            $query = \DB::table('personas')
                ->join('tipo_personas', 'personas.idTipoPersona', '=', 'tipo_personas.idTipoPersona')
                ->select(\DB::raw('CONCAT(personas.nombres, " ", personas.apellidos) AS nombres'), 'personas.correo', 'tipo_personas.nombre')
                ->where('numeroIdentificacion', '=', $numeroIdentificacion)
                ->get();        

            // var_dump($query[0]->correo);
            // var_dump($query[0]->nombres);
            // var_dump($query[0]->nombre);

            return response()->json([
                "mensaje" => $query
            ]);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresos = Ingreso::All();
        $tipoDocumentos = TipoDocumento::lists('nombre','idTipoDocumento');
        $tipoPersonas = TipoPersona::lists('nombre','idTipoPersona');
        $centros = CentroFormacion::lists('nombre','idCentroFormacion');
         return view('ingreso.create',compact('tipoDocumentos','tipoPersonas','ingresos','centros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresoCreateRequest $request)
    {

        if(empty($request['apellidos']))
        {
            // return "ya existe";            
        }
        else
        {
            Persona::create([
            'numeroIdentificacion' => $request['numeroIdentificacion'],
            'nombres' => $request ['nombres'],
            'apellidos' => $request['apellidos'],
            'correo' => $request['correo'],
            'idTipoDocumento' => $request['idTipoDocumento'],
            'idTipoPersona' => $request['idTipoPersona'],  
            'idCentroFormacion' => $request['idCentroFormacion'],          
            ]);

        }

        $id = Persona::where('numeroIdentificacion',$request['numeroIdentificacion'])->first(); 

        // return $id;

        Ingreso::create([
            'fecha' => $request['fecha'],
            'horaIngreso' => $request['horaIngreso'],
            'descripcion' => $request['descripcion'],  
            'horaSalida' => $request['horaSalida'],  
            'idPersona'=> $id->idPersona,
            ]);      

        return redirect('ingreso')->with('message','Ingreso registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
