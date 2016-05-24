<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documentos";
    protected $primaryKey = "idTipoDocumento"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];

}
