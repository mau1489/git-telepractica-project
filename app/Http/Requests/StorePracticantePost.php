<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePracticantePost extends FormRequest
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
            'run' => 'required|min:9|max:10',
            'nombre_completo' => 'required|max:30',
            'email' => 'required|max:100',
            'telefono' => 'required|max:30',
            'region_id' => 'required',
            'comuna_id' => 'required',
            'internet_fijo' => 'required',
            'equipo_computacional' => 'required',
            'nivel_educacional_id' => 'required',
            'carrera_id' => 'required',
            'institucion_id' => 'required',
            'tipo_practica_id' => 'required',
            'cantidad_horas' => 'required',
            'cantidad_meses' => 'required',
        ];
    }
}
