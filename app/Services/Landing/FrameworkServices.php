<?php

namespace App\Services\Landing;
use App\Repositories\FrameworkRepository;

class FrameworkServices
{
    private $FrameworkRepository;
    public function __construct(FrameworkRepository $frameworkRepository) {
        $this->FrameworkRepository = $frameworkRepository;
    }

    public function getAllFramework()
    {
        return $this->FrameworkRepository->getAllFramework();
    }
}
