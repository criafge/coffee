<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
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
            'name' => 'required',
            'login' => 'required',
            'phone' => 'required|regex:/\+7\([0-9][0-9][0-9]\)[0-9]{3}(\-)[0-9]{2}(\-)[0-9]{2}$/'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'Пусто, как в моей душе🐵',
            'login.required' => 'Пусто, как в моей душе🐵',
            'phone.required' => 'Мы вообще-то в России живем🤍💙❤',
            'phone.regex' => 'Мы вообще-то в России живем🤍💙❤',
        ];
    }
}
