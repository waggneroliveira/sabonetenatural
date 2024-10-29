<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        if(!Auth::user()->hasRole('Super') && !Auth::user()->can('usuario.tornar usuario master') && !Auth::user()->can('usuario.visualizar')){
            return false;
        }
        return true;
    }
    
    protected function prepareForValidation()
    {
        $this->merge([
            'active' => $this->input('active') === 'on' ? 1 : 0,
        ]);
    }
    
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'password' => ['nullable', 'string'],
            'active' => 'boolean',
            'path_image' => ['nullable', 'string'],
            'sorting' => ['nullable', 'integer'],
            'roles'=>'array',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.unique' => 'Este e-mail já está em uso.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
        ];
    }
}