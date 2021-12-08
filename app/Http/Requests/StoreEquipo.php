<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipo extends FormRequest
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
            'nombre_equipo' => 'required',
            'nombre_manager' => 'required',
            'apaterno_manager' => 'required',
            'amaterno_manager' => 'required',
            'id_liga' => 'required',
            'id_entrenador' => 'required'
        ];
    }
}
