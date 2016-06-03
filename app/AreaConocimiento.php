<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaConocimiento extends Model
{
    use SoftDeletes;

	protected $table = "area_conocimientos";
	protected $primaryKey = "idAreaConocimiento";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre','idLineaTecnologica']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro
}
