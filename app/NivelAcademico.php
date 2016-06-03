<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelAcademico extends Model
{
    use SoftDeletes;

    protected $table = "nivel_ademicos";
    protected $primaryKey = "idNivelAcademico"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
