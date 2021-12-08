<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoticia extends FormRequest
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
            'titulo'=> 'required',
            'descripcion'=>'required',
            'fecha_noticia'=>'required',
            'nombre_autor'=>'required',
            'apaterno_autor'=>'required',
            'amaterno_autor'=>'required'
        ];
    }
}
