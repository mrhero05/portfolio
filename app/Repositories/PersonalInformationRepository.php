<?php

namespace App\Repositories;
use App\Models\PersonalInformation;

class PersonalInformationRepository
{
    public function getAllPersonalInformation()
    {
        return PersonalInformation::get();
    }
}
