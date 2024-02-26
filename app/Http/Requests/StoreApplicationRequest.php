<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            'cost' => 'required|min:0',
            'date_time' => 'required',
            'comment' => 'max:250',
        ];
    }
    public function messages(): array
    {
        return [
            'date_time.required' => 'А когда ты придешь то, дурак, я тогда сделаю через год, понял да',
            'comment.max' => 'Слишком много для такого как ты',
        ];
    }
}
