<?php

namespace App\Http\Requests\Admin\Team\Roles;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                Rule::unique('roles', 'name')
                    ->where('guard_name', 'admin'),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Назва ролі є обов’язковою.',
            'name.string' => 'Назва ролі повинна бути рядком.',
            'name.unique' => 'Роль з такою назвою вже існує.',
        ];
    }
}
