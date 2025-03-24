<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroHeader extends Model
{
    //
    protected $table = 'hero_headers';

    protected $fillable = ['title','float_text','description','languages'];

    protected $casts = [
        'languages' => 'array'
    ];
}
