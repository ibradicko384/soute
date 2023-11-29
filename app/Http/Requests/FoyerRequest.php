<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoyerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return true
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     *
     * @psalm-return array{nom: 'required|string|max:255', prenom: 'required|string', quartier: 'required|string'}
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string',
            'quartier' => 'required|string',
        ];
    }
}
