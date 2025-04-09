<?php

namespace App\Services\Landing;

use App\Repositories\PersonalInformationRepository;

class PersonalInformationServices
{
    private $PersonalRepository;
    public function __construct(PersonalInformationRepository $personalInformationRepository) {
        $this->PersonalRepository = $personalInformationRepository;
    }

    public function getPersonalInformation()
    {
        return $this->PersonalRepository->getAllPersonalInformation();
    }
}
