<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gestor extends Model
{
    use SoftDeletes;

	protected $table = "gestors";
	protected $primaryKey = "idGestor";  //se agrega si el nombre de pk no es id
	protected $fillable = ['idPersona','idLineaTecnologica']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

    //Un gestor es una persona
    public function personas()
    {
        return $this->belongsTo('Tecnoparque\Persona','idPersona');
    }

    //Un gestor pertenece a una lineaTecnologica
    public function lineaTecnologicas()
    {
        return $this->belongsTo('Tecnoparque\LineaTecnologica','idLineaTecnologica');
    }

}
