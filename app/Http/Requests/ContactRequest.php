<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => ['required', 'string', 'max:255'],
            'work_time_ru' => ['required', 'string', 'max:255'],
            'address_ru' => ['required', 'string'],
            'work_time_uz' => ['required', 'string', 'max:255'],
            'address_uz' => ['required', 'string'],
            'geolocation' => ['required', 'string', 'url'],
        ];
    }
}
