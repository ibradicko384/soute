<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AidemenageRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string',
            'date' => 'required|date',
            'quartier' => 'required|string',
            // Ajoutez d'autres règles de validation au besoin
        ];
    }
}
