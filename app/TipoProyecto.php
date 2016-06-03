<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProyecto extends Model
{
    use SoftDeletes;

    protected $table = "tipo_proyectos";
    protected $primaryKey = "idTipoProyecto";  //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
	protected $dates = ['deleted_at']; //para deshabilitar el registro

}
