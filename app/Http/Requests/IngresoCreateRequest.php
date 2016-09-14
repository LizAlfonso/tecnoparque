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
            'numeroIdentificacion' => 'required|unique:persona|max:15',
            'idTipoDocumento' => 'required',
            'idTipoPersona' => 'required',
            'nombres'=> 'required|max:50',
            'apellidos'=> 'required|max:50'
            'correo'=> 'required|email|unique:personas|max:254',
            'fecha'=> 'required',
        ];
    }
}
