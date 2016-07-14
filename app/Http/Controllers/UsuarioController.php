<?php

namespace Tecnoparque\Http\Controllers;

use Illuminate\Http\Request;
use Tecnoparque\Http\Controllers\Controller;
use Session;
use Redirect;
use Tecnoparque\Http\Requests;
use Tecnoparque\Http\Requests\UserCreateRequest;
use Tecnoparque\User; //nombre de modelo para evitar poner \Tecnoparque\ en cada método
use Tecnoparque\Rol;

class UsuarioController extends Controller
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
        $users = User::All();
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombreRol = \DB::table('rols')->lists('nombre','idRol');
        return view('usuario.create', compact('nombreRol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
            // User::create([
            // 'name' => $request['name'],
            // 'email' => $request ['email'],
            // 'password' => $request['password'],
            // ]);

        User::create($request->all());

        return redirect('/usuario')->with('message','Usuario registrado correctamente');
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
        $nombreRol = Rol::lists('nombre','idRol');
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user],compact('nombreRol'));
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
        $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email|min:8|unique:users,email,'.$id,
        'idRol' => 'required',
        'password' => 'min:4|confirmed',
        ]);

        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Usuario modificado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::destroy($id);
        $user = User::find($id);
        $user->delete();
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
