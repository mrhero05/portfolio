<?php

namespace App\Repositories;

use App\Models\Projects;

class ProjectRepository
{
    public function getAllProjects()
    {
        return Projects::orderBy('order_weight','desc')->get();
    }
}
