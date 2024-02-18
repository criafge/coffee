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
            'title_create' => 'required|regex:/[А-Яа-яЁё]/u',
            'description_create' => 'required',
            'cost_create' => 'required|numeric|min:0',
            'category_id_create' => 'required',
            'photo_create' => 'required|extensions:jpg,png,jpeg',
        ];
    }

    public function messages(): array
    {
        return [
            'title_create.required'=> 'Пусто, как в моей душе🐵',
            'title_create.regex' => 'Мы вообще-то в России живем🤨',
            'description_create.required' => 'А че, покупать и надеяться на бога?🤬',
            'cost_create.required' => 'Ну сколько-то заплатить надо🥵',
            'cost_create.numeric' => 'Боюсь ты запутаешься в склонении чисел💀',
            'cost_create.min' => 'Тебе что ли заплатить должны?💲',
            'category_id_create.required' => 'Просто выбери.😠',
            'photo_create.required' => 'На слово верить?🥺',
            'photo_create.extensions' => 'Ты че дурак?🤡',
        ];
    }
}
