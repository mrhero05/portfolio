<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    //
    protected $table = 'frameworks';
    protected $fillable = ['title','order_weight','frameworks_img','custom_css','cta'];
    protected $casts = [
        'custom_css' => 'array',
        'order_weight' => 'integer',
    ];
}
