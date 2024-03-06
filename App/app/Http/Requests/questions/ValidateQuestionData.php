<?php

namespace App\Http\Requests\questions;

use Illuminate\Foundation\Http\FormRequest;

class ValidateQuestionData extends FormRequest
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
            'test_id' => 'required',
            'question' => 'required| min:5 | max:255',
            'reponse' => 'required| min:5 | max:255',
        ];
    }
}
