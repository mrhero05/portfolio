<?php

namespace App\Services\Landing;
use App\Repositories\ExperienceRepository;

class ExperienceServices
{
    private $ExperienceRepository;

    public function __construct(ExperienceRepository $experienceRepository) {
        $this->ExperienceRepository = $experienceRepository;
    }

    public function getExperience()
    {
        return $this->ExperienceRepository->getAllExperience();
    }
}
