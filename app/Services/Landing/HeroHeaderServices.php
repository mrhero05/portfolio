<?php

namespace App\Services\Landing;

use App\Repositories\LandingPagesRepository;

class HeroHeaderServices
{
    private $LandingPagesRepository;

    public function __construct(LandingPagesRepository $landingPagesRepository) {
        $this->LandingPagesRepository = $landingPagesRepository;
    }

    public function getAllHeroHeader()
    {
        return $this->LandingPagesRepository->getHeroHeaderData();
    }
}
