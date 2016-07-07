<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rols";
    protected $primaryKey = "idRol"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];

    // //Un rol tiene muchos usuarios
     public function usuarios()
    {
        return $this->hasMany('Tecnoparque\User','id','idRol');
    } 

}
