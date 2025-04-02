<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\ExperienceServices;

class Experience extends Component
{
    private $ExperienceServices;

    public function mount(ExperienceServices $experienceServices) {
        $this->ExperienceServices = $experienceServices;
    }

    public function render()
    {
        $experience = $this->ExperienceServices->getExperience();
        return view('livewire.landing.experience', compact('experience'));
    }
}
