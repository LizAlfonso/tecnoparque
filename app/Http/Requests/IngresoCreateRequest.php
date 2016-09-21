<?php

namespace Tecnoparque\Http\Requests;

use Tecnoparque\Http\Requests\Request;

class IngresoCreateRequest extends Request
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
            'fecha'=> 'required',
            // 'idTipoPersona' => 'required',
            // 'correo'=> 'required|email|unique:personas|max:254',
            // 'idTipoDocumento' => 'required',
            // 'nombres'=> 'required|max:50',
            // 'apellidos'=> 'required|max:50',

        ];
    }
}
