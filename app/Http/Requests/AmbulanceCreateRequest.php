<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AmbulanceCreateRequest extends Request
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
            'name' => 'required',
            'ville_id' => 'required',
            'quartier_id' => 'required',
            'hopital_id' => 'required',
            'phone' => 'required|min:9|unique:ambulances',
        ];
    }
}
