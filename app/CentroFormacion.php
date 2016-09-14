<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CentroFormacion extends Model
{
    use SoftDeletes;

	protected $table = "centro_formacions";
	protected $primaryKey = "idCentroFormacion";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

	//Un centroFormacion tiene muchas personas
     public function personas()
    {
        return $this->hasMany('Tecnoparque\Persona','idPersona','idCentroFormacion');
    }

}
