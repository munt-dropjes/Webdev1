<?php

namespace Models;

class ContactInfo
{
    public array $contactData;

    function __construct($contactData)
    {
        $this->contactData = $contactData;
    }
}