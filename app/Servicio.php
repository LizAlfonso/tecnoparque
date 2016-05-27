<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    
    use SoftDeletes;

	protected $table = "servicios";
	protected $primaryKey = "idServicio";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre']; 
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

}
