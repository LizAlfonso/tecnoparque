<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
	use SoftDeletes;

	protected $table = "personas";
	protected $primaryKey = "idPersona";  //se agrega si el nombre de pk no es id
	protected $fillable = ['numeroIdentificacion','nombres','apellidos','genero','telefono','celular','correo','empresa','idTipoDocumento','idTipoPersona']; //estado bit...mirar si agregar o no
	protected $dates = ['deleted_at'];  //para deshabilitar el registro

	//Una persona tiene un tipoDocumento
    public function tipoDocumentos()
    {
        return $this->belongsTo('Tecnoparque\TipoDocumento','idTipoDocumento');
    }

    //Una persona tiene un tipoPersona
    public function tipoPersonas()
    {
        return $this->belongsTo('Tecnoparque\TipoPersona','idTipoPersona');
    }

    //Una persona pertenece a muchos eventos
    public function eventos()
    {
        return $this->belongsToMany('Tecnoparque\Evento','det_evento_personas','idPersona','idEvento')->withPivot('responsable');
    }

    //Una persona tiene muchos ingresos
     public function ingresos()
    {
        return $this->hasMany('Tecnoparque\Ingreso','idIngreso','idPersona');
    }

}
