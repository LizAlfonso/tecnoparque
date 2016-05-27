<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
	protected $primaryKey = "idEvento";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre','fecha','hora','lugar','cupos','descripcion','externo','idServicio']; 
}
