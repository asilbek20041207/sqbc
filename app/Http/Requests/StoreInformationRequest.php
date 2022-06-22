<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
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
            'desc1_ru' => ['required', 'string'],
            'desc1_uz' => ['required', 'string'],
            'specialists_count' => ['required'],
            'projects_count' => ['required'],
            'desc2_ru' => ['required', 'string'],
            'desc2_uz' => ['required', 'string'],
            'service1_ru' => ['required', 'string', 'max:255'],
            'service1_uz' => ['required', 'string', 'max:255'],
            'service2_ru' => ['required', 'string', 'max:255'],
            'service2_uz' => ['required', 'string', 'max:255'],
            'service3_ru' => ['required', 'string', 'max:255'],
            'service3_uz' => ['required', 'string', 'max:255'],
            'plan1_ru' => ['required', 'string', 'max:255'],
            'plan1_uz' => ['required', 'string', 'max:255'],
            'plan2_ru' => ['required', 'string', 'max:255'],
            'plan2_uz' => ['required', 'string', 'max:255'],
            'plan3_ru' => ['required', 'string', 'max:255'],
            'plan3_uz' => ['required', 'string', 'max:255'],
            'plan4_ru' => ['required', 'string', 'max:255'],
            'plan4_uz' => ['required', 'string', 'max:255'],
            'values_title1_ru'=> ['required', 'string', 'max:255'],
            'values_title1_uz' => ['required', 'string', 'max:255'],
            'values_title2_ru' => ['required', 'string', 'max:255'],
            'values_title2_uz' => ['required', 'string', 'max:255'],
            'values_title3_ru' => ['required', 'string', 'max:255'],
            'values_title3_uz' => ['required', 'string', 'max:255'],
            'values_title4_ru' => ['required', 'string', 'max:255'],
            'values_title4_uz' => ['required', 'string', 'max:255'],
            'values_desc1_ru' => ['required', 'string'],
            'values_desc1_uz' => ['required', 'string'],
            'values_desc2_ru' => ['required', 'string'],
            'values_desc2_uz' => ['required', 'string'],
            'values_desc3_ru' => ['required', 'string'],
            'values_desc3_uz' => ['required', 'string'],
            'values_desc4_ru' => ['required', 'string'],
            'values_desc4_uz' => ['required', 'string'],
            'image1' => ['required', 'image', 'mimes:jpg'],
            'image2' => ['required', 'image', 'mimes:jpg'],
            'image3' => ['required', 'image', 'mimes:jpg'],
            'image4' => ['required', 'image', 'mimes:jpg'],
            'charter' => ['required'],
            'supervisory_board' => ['required'],
            'company_structure_ru' => ['required', 'image', 'mimes:jpg,png'],
            'company_structure_uz' => ['required', 'image', 'mimes:jpg,png'],
        ];
    }
}
