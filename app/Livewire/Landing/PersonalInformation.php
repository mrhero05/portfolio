<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\PersonalInformationServices;

class PersonalInformation extends Component
{
    private $PersonalInformationService;
    public function mount(PersonalInformationServices $personalInformationServices)
    {
        $this->PersonalInformationService = $personalInformationServices;
    }

    public function render()
    {
        $data = $this->PersonalInformationService->getPersonalInformation();
        return view('livewire.landing.personal-information',compact('data'));
    }
}
