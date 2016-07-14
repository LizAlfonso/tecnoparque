<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPersona extends Model
{

	use SoftDeletes;

    protected $table = "tipo_personas";
    protected $primaryKey = "idTipoPersona";  //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
	protected $dates = ['deleted_at']; //para deshabilitar el registro

	//Un tipoPersona tiene muchas personas
     public function personas()
    {
        return $this->hasMany('Tecnoparque\Persona','idPersona','idTipoPersona');
    }

}
