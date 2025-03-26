<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $table = 'projects';

    protected $fillable = ['title','order_weight','description','project_link','github_link','project_images'];

    protected $casts = [
        'project_images' => 'array'
    ];
}
