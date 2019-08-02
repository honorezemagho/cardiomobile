<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestClientContactMedecinRequest extends FormRequest
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
            'meeting_datetime' => 'required',
            'phone' => 'required|min:9',
            'description' => 'required',
            'payment_method' => 'required',
            'urgence_type' => 'required',

        ];
    }
}
