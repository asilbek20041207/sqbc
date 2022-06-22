<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'subtitles_ru' => ['required', 'array'],
            'subtitles_uz' => ['required', 'array'],
            'descriptions_ru' => ['required', 'array'],
            'descriptions_uz' => ['required', 'array'],
            'date' => ['date']
        ];
    }
}
