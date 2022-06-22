<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoArticle extends Model
{
    use HasFactory;

    protected $fillable = ['preview', 'title_ru', 'title_uz', 'link', 'date'];
}
