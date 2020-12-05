<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:30',
            'email' => 'required|email|max:50',
            'subject' => 'required|max:50',
            'message' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Поле 'имя' является обязательным",
            'email.required' => "Поле 'email' является обязательным",
            'subject.required' => "Поле 'Тема сообщения' является обязательным",
            'message.max:255' => "Поле 'Сообщение' не должно превышать 255 символов"
        ];
    }
}
