<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetInfraestructuraPersona extends Model
{
    protected $table = "det_infraestructura_personas";
    protected $primaryKey = "idDetInfraestructuraPersona"; //se agrega si el nombre de pk no es id
    protected $fillable = ['idInfraestructura','idPersona'];
}
