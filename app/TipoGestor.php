<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoGestor extends Model
{
	use SoftDeletes;

    protected $table = "tipo_gestors";
    protected $primaryKey = "idTipoGestor";  //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];                                                  
    protected $dates = ['deleted_at']; //para deshabilitar el registro

}
