<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'telegram' => ['required', 'string', 'url'],
            'instagram' => ['required', 'string', 'url'],
            'facebook' => ['required', 'string', 'url'],
            'linkedin' => ['required', 'string', 'url'],
            'mail' => ['required', 'string']
        ];
    }
}
