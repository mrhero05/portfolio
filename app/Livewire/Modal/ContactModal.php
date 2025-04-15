<?php

namespace App\Livewire\Modal;

use App\Mail\Contact;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;

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
        $this->validate();
        try {
            // Send Email
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new Contact($this->name, $this->email, $this->message));
            // Flash Notification
            flash()->success('Thank you for reaching out. Your message has been received and we’ll get back to you shortly.', [
                'position' => 'bottom-right',
            ]);
            // Reset Fields
            $this->reset(['name', 'email', 'message']);
            $this->dispatch('close-contact-modal');
        } catch (\Throwable $th) {
            // Show Error Flash
            dd($th);
            flash()->error('There was an error while sending your message. Please try again later.', [
                'position' => 'bottom-right',
            ]);
        }
        // dd($this->email);
    }

    public function render()
    {
        return view('livewire.modal.contact-modal');
    }
}
