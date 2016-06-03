<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetPersonaProyecto extends Model
{
    use SoftDeletes;

	protected $table = "det_persona_proyectos";
	protected $primaryKey = "idDetPersonaProyecto";  //se agrega si el nombre de pk no es id
	protected $fillable = ['idPersona','idProyecto'];    //lider bit...mirar si agregar o no
	protected $dates = ['deleted_at'];  //para deshabilitar el registro
}
