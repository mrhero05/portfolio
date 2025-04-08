<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    //
    protected $table = 'personal_information';
    protected $fillable = [
        'info',
        'profile',
        'info_data'
    ];
    protected $casts = [
        'info_data' => 'array'
    ];
}
