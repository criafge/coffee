<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoffeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|regex:/[А-Яа-яЁё]/u',
            'description' => 'required',
            'cost' => 'required|numeric|min:0',
            'category_id' => 'required',
            'recept' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=> 'Пусто, как в моей душе',
            'title.regex' => 'Мы вообще-то в России живем',
            'description.required' => 'А че, покупать и надеяться на бога?',
            'cost.required' => 'Ну сколько-то заплатить надо',
            'cost.numeric' => 'Боюсь ты запутаешься в склонении чисел',
            'cost.min' => 'Тебе что ли заплатить должны?',
            'category_id.required' => 'Просто выбери.',
            'recept.required' => 'Ну а как бариста работать должен?',
        ];
    }
}
