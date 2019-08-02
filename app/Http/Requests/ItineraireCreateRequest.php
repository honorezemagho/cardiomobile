<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItineraireCreateRequest extends Request
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
            //
            'ville_id_start' => 'required',
            'quartier_id_start' => 'required',
            'ville_id_stop' => 'required',
            'quartier_id_stop' => 'required',
            'name' => 'required',
            'phone' => 'required|min:9|unique:itineraire',
            'description' => 'required',

        ];
    }
}
