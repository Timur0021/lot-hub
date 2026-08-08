<?php

namespace App\Http\Requests\Admin\Currency;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrencyRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'size:3', 'unique:currencies,code'],
            'name' => ['required', 'string'],
            'symbol' => ['nullable', 'string', 'max:10'],
            'rate' => ['required', 'numeric', 'min:0'],
            'is_base' => ['boolean'],
            'active' => ['boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'code.required' => 'Code is required.',
            'code.string' => 'Code must be a valid string.',
            'code.size' => 'Code must be 3 characters.',
            'code.unique' => 'This code is already taken.',
        ];
    }
}
