<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugador extends FormRequest
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
            'nombre_jugador' => 'required',
            'apaterno_jugador' => 'required',
            'amaterno_jugador' => 'required',
            'id_equipo' => 'required',
            'id_posicion' => 'required'
        ];
    }
}
