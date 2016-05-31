<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetEventoPersona extends Model
{
    protected $table = "det_evento_personas";
    protected $primaryKey = "idDetEventoPersona"; //se agrega si el nombre de pk no es id
    protected $fillable = ['idEvento','idPersona'];  //responsable bit...mirar si agregar o no
}