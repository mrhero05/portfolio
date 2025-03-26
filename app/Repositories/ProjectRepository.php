<?php

namespace App\Repositories;

use App\Models\Projects;

class ProjectRepository
{
    public function getAllProjects()
    {
        return Projects::get();
    }
}
