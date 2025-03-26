<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\ProjectServices;

class Projects extends Component
{
    private $ProjectServices;
    public function mount(ProjectServices $projectServices)
    {
        $this->ProjectServices = $projectServices;
    }

    public function render()
    {
        $projects = $this->ProjectServices->getProjects();
        return view('livewire.landing.projects', compact('projects'));
    }
}
