<?php

namespace Src\Example\User\Infrastructure\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\Shared\Infrastructure\Helpers\StringHelper;

final class UserCreateRequest extends FormRequest
{
    use StringHelper;

    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            // required
            'username.required' => 'El username es requerido',
            'first_name.required' => 'El first_name es requerido',
            'last_name.required' => 'El last_name es requerido',
            'email.required' => 'El email es requerido',
            'password.required' => 'El password es requerido',
            // email
            'email.email' => 'El formato del email es inválido'
        ];
    }

    public function failedValidation(Validator $validator): void
    {
        throw new UserException($this->formatErrorsRequest($validator->errors()->all()), 400);
    }
}
