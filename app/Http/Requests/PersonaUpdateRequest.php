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
            'numeroIdentificacion' => 'required',
            'idTipoDocumento' => 'required',
            'idTipoPersona' => 'required',
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'correo'=> 'required|email',
        ];
    }
}
