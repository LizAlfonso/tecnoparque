<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
	protected $primaryKey = "idEvento";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre','fecha','hora','lugar','lugarEspecifico','cupos','descripcion','idServicio','idLugar']; 

    // Mutador: Permite dar formato a los atributos cuando se reciben desde un modelo o se les da un valor.
    public function setIdLugarAttribute($value) {
        $this->attributes['idLugar'] = $value ?: null;
    }

	//Un evento pertenece a un servicio
    public function servicios()
    {
        return $this->belongsTo('Tecnoparque\Servicio','idServicio');
    }

    //Un evento pertenece a muchas personas
    public function personas()
    {
    	return $this->belongsToMany('Tecnoparque\Persona','det_evento_personas','idEvento','idPersona')->withPivot('responsable');
    }

    //Un evento pertenece a un lugar
    public function lugars()
    {
        return $this->belongsTo('Tecnoparque\Lugar','idLugar');
    }
}
