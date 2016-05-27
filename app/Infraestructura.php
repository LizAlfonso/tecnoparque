<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infraestructura extends Model
{
    use SoftDeletes;

    protected $table = "infraestructuras";
    protected $primaryKey = "idInfraestructura"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fechaRegistro','horaIngreso','horaSalida','duracionAsesoria','idRecurso'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
