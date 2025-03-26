<?php

namespace App\Services\Landing;

use App\Repositories\ProjectRepository;

class ProjectServices
{
    private $ProjectRepository;

    public function __construct(ProjectRepository $projectRepository) {
        $this->ProjectRepository = $projectRepository;
    }

    public function getProjects()
    {
        return $this->ProjectRepository->getAllProjects();
    }
}
