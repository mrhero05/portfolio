<?php

namespace App\Services\Landing;
use App\Repositories\ContactRepository;

class ContactServices
{
    private $ContactRepository;
    public function __construct(ContactRepository $contactRepository) {
        $this->ContactRepository = $contactRepository;
    }

    public function getContact()
    {
        return $this->ContactRepository->getAllContacts();
    }
}
