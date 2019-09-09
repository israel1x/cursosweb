<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3', 'max:20' , 'string'
            ],
            'lastname' => [
                'required', 'min:3', 'max:20' , 'string'
            ],
            'tipoPerfil_id' => [
                'required', 'integer'
            ],
            'email' => [
                'required', 'email', Rule::unique((new User)->getTable())->ignore($this->route()->user->id ?? null)
            ],
            'password' => [
                $this->route()->user ? 'nullable' : 'required', 'confirmed', 'min:6'
            ]
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => ' El Email es necesario!',
            'name.required' => 'El Nombre  es necesario!',
            'lastname.required' => 'El Apellido  es necesario!',
            'password.required' => 'El Password es necesario!',
            'tipoPerfil_id.required' => 'El Perfil de usuario es necesario!'

        ];
    }
}
