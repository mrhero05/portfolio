<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\Landing\ContactServices;

class Contact extends Component
{
    private $ContactServices;

    public function mount(ContactServices $contactServices)
    {
        $this->ContactServices = $contactServices;
    }

    public function render()
    {
        $contacts = $this->ContactServices->getContact();
        return view('livewire.landing.contact', compact('contacts'));
    }
}
