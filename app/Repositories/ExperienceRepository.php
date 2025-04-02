<?php

namespace App\Repositories;
use App\Models\Experience;

class ExperienceRepository
{
    public function getAllExperience()
    {
        return Experience::get();
    }
}
