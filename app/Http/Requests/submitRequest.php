<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class submitRequest extends FormRequest
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
            'text_title' => 'required | min:3 | max:200 |',
            'text_note' => 'required | min:3 | max:3000'
        ];
    }

    public function messages()
    {
        return [
            'text_title.required' => 'O campo título é obrigatório.',
            'text_title.min' => 'O título deve ter pelo menos 3 caracteres.',
            'text_title.max' => 'O título não pode ter mais de 60 caracteres.',
            'text_note.required' => 'O campo texto é obrigatório.',
            'text_note.min' => 'O texto deve ter pelo menos 3 caracteres.',
        ];
    }
}
