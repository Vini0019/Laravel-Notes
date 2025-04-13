<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:16',
        ];
    }

    public function messages()
    {
        return[
            'text_username.required' => 'O username é obrigatório',
            'text_username.email' => 'Username deve ser um email válido',
            'text_password.min' => 'O password deve ter no minimo :min caracteres'
        ];
    }
}
