<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_uz',
        'preview',
        'banner',
        'subtitles_ru',
        'subtitles_uz',
        'descriptions_ru',
        'descriptions_uz',
        'images',
        'date'
    ];

    public function updateImage(Request $request, $image)
    {
        if ($request->hasFile($image)) {
            $request->validate([
                $image => ['required', 'image', 'mimes:jpg']
            ]);

            unlink(public_path('storage/' . $this->$image));
            return $request->file($image)->store('articles');
        } else {
            return $this->$image;
        }
    }

    public function deleteArticle()
    {
        unlink(public_path('storage/' . $this->preview));
        unlink(public_path('storage/' . $this->banner));

        $images = unserialize($this->images);
        foreach ($images as $image) {
            unlink(public_path('storage/' . $image));
        }

        $this->delete();
    }
}
