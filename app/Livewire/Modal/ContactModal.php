<?php

namespace App\Livewire\Modal;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactModal extends Component
{
    // Contact Form Property

    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|string')]
    public $message;

    public function send()
    {
        flash()->success('Operation completed successfully!!', [
            'position' => 'bottom-right',
        ]);
        // dd($this->email);
    }

    public function render()
    {
        return view('livewire.modal.contact-modal');
    }
}
