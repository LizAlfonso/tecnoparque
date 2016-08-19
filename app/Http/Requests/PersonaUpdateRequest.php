<?php

namespace Tecnoparque\Http\Requests;

use Tecnoparque\Http\Requests\Request;

class PersonaUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'numeroIdentificacion' => 'required|max:15',
            'idTipoDocumento' => 'required',
            'idTipoPersona' => 'required',
            'nombres'=> 'required|max:50',
            'apellidos'=> 'required|max:50',
            'correo'=> 'required|email|max:254',
            'telefono'=> 'min:7|max:20',
            'celular'=> 'min:10|max:10',
            'empresa'=> 'max:30',
        ];
    }
}
