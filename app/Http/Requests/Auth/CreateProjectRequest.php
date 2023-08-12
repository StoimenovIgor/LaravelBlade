<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;


class CreateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required|url',
            'url' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required|max:200',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.required' => 'Слика од проектот е задолжителна.',
            'url.required' => 'Веб адресата е задолжителна.',
            'name.required' => 'Името на проектот е задолжително.',
            'subtitle.required' => 'Поднасловот е задолжителен.',
            'description.required' => 'Описот е задолжителен.',
            'description.max' => 'Описот е максимално - 200 карактери.',
        ];
    }
}
