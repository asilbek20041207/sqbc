<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_uz',
        'description_ru',
        'description_uz',
        'address_ru',
        'address_uz',
        'date',
        'image'
    ];
}
