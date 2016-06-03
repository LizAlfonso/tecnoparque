<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gestor extends Model
{
    use SoftDeletes;

	protected $table = "gestors";
	protected $primaryKey = "idGestor";  //se agrega si el nombre de pk no es id
	protected $fillable = ['idPersona','idLineaTecnologica','idTipoGestor']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

}
