<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'work_time_ru',
        'address_ru',
        'work_time_uz',
        'address_uz',
        'geolocation'
    ];
}
