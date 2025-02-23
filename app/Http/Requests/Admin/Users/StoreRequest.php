<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'required|integer'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Это поле должно быть заполненно.',
            'name.string' => 'Поле должно содержать строчный тип данных.',
            'email.required' => 'Это поле должно быть заполненно.',
            'email.string' => 'Это поле должно быть заполненно.',
            'email.email' => 'Вы должны указать адрес электронной почты.',
            'email.unique' => 'Указанный адрес электронной почты занят.',
            'password.required' => 'Это поле должно быть заполненно.',
            'password.string' => 'Поле должно содержать строчный тип данных.',
        ];
    }
}
