<?php

namespace Tecnoparque;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";
	protected $primaryKey = "idEvento";  //se agrega si el nombre de pk no es id
	protected $fillable = ['nombre','fecha','hora','lugar','lugarEspecifico','cupos','descripcion','idServicio']; 

	//Un evento pertenece a un servicio
    public function servicios()
    {
        return $this->belongsTo('Tecnoparque\Servicio','idServicio');
    }

    //Un evento pertenece a muchas personas
    public function personas()
    {
        return $this->belongsToMany('Tecnoparque\Persona', 'det_evento_personas', 'idEvento', 'idPersona')->withPivot('responsable');
    }

}
