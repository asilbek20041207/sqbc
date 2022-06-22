<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_ru' => ['required', 'string', 'max:255'],
            'title_uz' => ['required', 'string', 'max:255'],
            'description_ru' => ['required', 'string'],
            'description_uz' => ['required', 'string'],
            'address_ru' => ['required', 'string'],
            'address_uz' => ['required', 'string'],
            'date' => ['required', 'date']
        ];
    }
}
