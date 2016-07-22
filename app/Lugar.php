<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lugar extends Model
{
    use SoftDeletes;

	protected $table = "lugars";
	protected $primaryKey = "idLugar";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

	//Un lugar tiene muchos eventos
     public function eventos()
    {
        return $this->hasMany('Tecnoparque\Evento','idEvento','idLugar');
    }
}
