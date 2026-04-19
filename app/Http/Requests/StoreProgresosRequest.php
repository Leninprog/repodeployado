<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgresosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'progreso' => 'required',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date',
            'cantidadNotas' => 'required|numeric',
            'peso' => 'required|numeric|between:0,1',
        ];
    }
}
