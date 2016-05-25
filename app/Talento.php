<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Talento extends Model
{
    use SoftDeletes;

    protected $table = "talentos";
    protected $primaryKey = "idTalento"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fechaNacimiento','estrato','direccion','graduado','anhoTerminacion','tituloObtenido','institucion','asistenteLaboratorio','idPersona','idNivelAcademico','idCiudad'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
