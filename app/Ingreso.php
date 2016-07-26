<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = "ingresos";
    protected $primaryKey = "idIngreso"; //se agrega si el nombre de pk no es id
    protected $fillable = ['fecha','horaIngreso','descripcion','horaSalida','idPersona'];

    //Un ingreso pertenece a una persona
    public function personas()
    {
        return $this->belongsTo('Tecnoparque\Persona','idPersona');
    }

}
