<?php

namespace App\Repository;

use App\Model\ContactUs;

class ContactUsRepository
{
    public function saveContactUs($inputs)
    {
        return ContactUs::create($inputs);
    }
}