<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'google_tag' => ['nullable', 'string'],
            'yandex_metrics' => ['nullable', 'string'],
            'facebook_pixel' => ['nullable', 'string']
        ];
    }
}
