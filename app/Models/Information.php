<?php

namespace App\Models;

use App\Http\Requests\UpdateInformationRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_uz',
        'desc1_ru',
        'desc1_uz',
        'specialists_count',
        'projects_count',
        'desc2_ru',
        'desc2_uz',
        'service1_ru',
        'service1_uz',
        'service2_ru',
        'service2_uz',
        'service3_ru',
        'service3_uz',
        'plan1_ru',
        'plan1_uz',
        'plan2_ru',
        'plan2_uz',
        'plan3_ru',
        'plan3_uz',
        'plan4_ru',
        'plan4_uz',
        'values_title1_ru',
        'values_title1_uz',
        'values_title2_ru',
        'values_title2_uz',
        'values_title3_ru',
        'values_title3_uz',
        'values_title4_ru',
        'values_title4_uz',
        'values_desc1_ru',
        'values_desc1_uz',
        'values_desc2_ru',
        'values_desc2_uz',
        'values_desc3_ru',
        'values_desc3_uz',
        'values_desc4_ru',
        'values_desc4_uz',
        'image1',
        'image2',
        'image3',
        'image4',
        'charter',
        'supervisory_board',
        'company_structure_ru',
        'company_structure_uz',
    ];

    public function updateFile(UpdateInformationRequest $request, $file)
    {
        if ($request->hasFile($file)) {
            unlink(public_path('storage/' . $this->$file));
            return $request->file($file)->store('information');
        } else {
            return $this->$file;
        }
    }

    public function deletInformation()
    {
        for ($i = 1; $i <= 4; $i++) {
            $image = 'image' . $i;
            unlink(public_path('storage/' . $this->$image));
        }

        unlink(public_path('storage/' . $this->charter));
        unlink(public_path('storage/' . $this->company_structure_ru));
        unlink(public_path('storage/' . $this->company_structure_uz));
        unlink(public_path('storage/' . $this->supervisory_board));

        $this->delete();
    }
}
