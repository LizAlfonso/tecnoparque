<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoProyecto extends Model
{
    use SoftDeletes;

    protected $table = "estado_proyectos";
    protected $primaryKey = "idEstadoProyecto";  //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre','fechaEstado'];
	protected $dates = ['deleted_at']; //para deshabilitar el registro

}
