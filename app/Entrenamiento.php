<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
    protected $table = "entrenamientos";
    protected $primaryKey = "idEntrenamiento"; //se agrega si el nombre de pk no es id
    protected $fillable = ['numeroEntrenamiento','confirmacion','documentosCompletos','fechaComite','horaComite','asistencia','admitido','comentarios','idFechaEntrenamiento','idProyecto'];
}
