<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\HeroHeaderServices;

class HeroHeader extends Component
{
    private $HeroHeaderService;

    public function mount(HeroHeaderServices $heroHeaderServices) {
        $this->HeroHeaderService = $heroHeaderServices;
    }

    public function render()
    {
        $data = $this->HeroHeaderService->getAllHeroHeader();
        // dd($data);
        return view('livewire.landing.hero-header', compact('data'));
    }
}
