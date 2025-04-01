<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\FrameworkServices;

class Frameworks extends Component
{
    protected $FrameworkServices;
    public function mount(FrameworkServices $frameworkServices)
    {
        $this->FrameworkServices = $frameworkServices;
    }

    public function render()
    {
        $frameworks = $this->FrameworkServices->getAllFramework();
        return view('livewire.landing.frameworks', compact('frameworks'));
    }
}
