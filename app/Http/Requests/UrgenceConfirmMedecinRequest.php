<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrgenceConfirmMedecinRequest extends FormRequest
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
            "shortcode" => "required",
            'medecin_phone' => 'min:9',
            "matricule" => "required",
            "phone" => "required|min:|unique:medecin"
        ];
    }
}
