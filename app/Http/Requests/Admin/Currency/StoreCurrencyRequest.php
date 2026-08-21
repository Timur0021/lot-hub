<?php

namespace App\Http\Requests\Admin\Currency;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
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
            'code' => [
                'required',
                'string',
                'size:3',
                'unique:currencies,code',
            ],

            'name' => [
                'required',
                'array',
            ],

            'name.uk' => [
                'required',
                'string',
                'max:255',
            ],

            'name.en' => [
                'required',
                'string',
                'max:255',
            ],

            'name.fr' => [
                'required',
                'string',
                'max:255',
            ],

            'symbol' => [
                'nullable',
                'string',
                'max:10',
            ],

            'rate' => [
                'required',
                'numeric',
                'min:0',
            ],

            'is_base' => [
                'nullable',
                'boolean',
            ],

            'active' => [
                'nullable',
                'boolean',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'code.required' => 'Code is required.',
            'code.string' => 'Code must be a valid string.',
            'code.size' => 'Code must be exactly 3 characters.',
            'code.unique' => 'This code is already taken.',

            'name.required' => 'Name is required.',
            'name.array' => 'Name must contain translations.',

            'name.uk.required' => 'Ukrainian name is required.',
            'name.uk.string' => 'Ukrainian name must be a valid string.',
            'name.uk.max' => 'Ukrainian name may not exceed 255 characters.',

            'name.en.required' => 'English name is required.',
            'name.en.string' => 'English name must be a valid string.',
            'name.en.max' => 'English name may not exceed 255 characters.',

            'name.fr.required' => 'French name is required.',
            'name.fr.string' => 'French name must be a valid string.',
            'name.fr.max' => 'French name may not exceed 255 characters.',

            'symbol.string' => 'Symbol must be a valid string.',
            'symbol.max' => 'Symbol may not exceed 10 characters.',

            'rate.required' => 'Rate is required.',
            'rate.numeric' => 'Rate must be a valid number.',
            'rate.min' => 'Rate cannot be negative.',

            'is_base.boolean' => 'Base currency must be true or false.',
            'active.boolean' => 'Active must be true or false.',
        ];
    }
}
