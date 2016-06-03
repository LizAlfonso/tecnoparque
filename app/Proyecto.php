<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;

	protected $table = "proyectos";
	protected $primaryKey = "idProyecto";  //se agrega si el nombre de pk no es id
	protected $fillable = ['titulo','fechaInicio','descripcion','idAreaConocimiento','idTipoProyecto','idEstadoProyecto','idClasificacion']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro
}
