<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts';
    protected $fillable = ['social_data'];

    protected $casts = [
        'social_data' => 'array'
    ];
}
