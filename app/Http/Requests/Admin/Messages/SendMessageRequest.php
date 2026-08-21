<?php

namespace App\Http\Requests\Admin\Messages;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'receiver_id' => [
                'required',
                'integer',
                'exists:admins,id',
                'different:' . auth('admin')->id(),
            ],

            'body' => [
                'required',
                'string',
                'max:5000',
            ],
        ];
    }

    public function body(): string
    {
        return trim($this->string('body')->toString());
    }

    public function receiverId(): int
    {
        return (int) $this->integer('receiver_id');
    }
}
