<?php

namespace App\Repositories;

use App\Models\HeroHeader;

class LandingPagesRepository
{
    public function getHeroHeaderData()
    {
        $data = HeroHeader::get();
        return $data;
    }
}
