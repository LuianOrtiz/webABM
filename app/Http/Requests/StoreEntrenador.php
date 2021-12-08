<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrenador extends FormRequest
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
            'nombre_entrenador' => 'required',
            'apaterno_entrenador' => 'required',
            'amaterno_entrenador' => 'required',
            'fecha_nacimiento' => 'required'
        ];
    }
}
