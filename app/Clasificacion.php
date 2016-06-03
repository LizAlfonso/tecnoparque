<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clasificacion extends Model
{
    use SoftDeletes;

	protected $table = "clasificacions";
	protected $primaryKey = "idClasificacion";  //se agrega si el nombre de pk no es id
	protected $fillable = ['estadoPropuesta','conformacionEquipo','categoria','objetivoGeneral','alcance']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro
}
