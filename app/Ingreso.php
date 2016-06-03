<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = "ingresos";
    protected $primaryKey = "idIngreso"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fecha','horaIngreso','horaSalida','idPersona'];
}
