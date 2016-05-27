<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FechaEntrenamiento extends Model
{
    protected $table = "fecha_entrenamientos";
    protected $primaryKey = "idFechaEntrenamiento";  //se agrega si el nombre de pk no es id
    protected $fillable = ['fecha','asistencia'];
}
