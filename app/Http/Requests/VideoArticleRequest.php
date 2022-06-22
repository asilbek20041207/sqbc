<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_ru' => ['required', 'string'],
            'title_uz' => ['required', 'string'],
            'link' => ['required', 'url'],
            'date' => ['required', 'date']
        ];
    }
}
