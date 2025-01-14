<?php

namespace Services;

use Repositories\ContactRepository;
use Models\ContactInfo;

class ContactService
{
    private $contactRepository;
    function __construct()
    {
        $this->contactRepository = new ContactRepository();
    }

    function getContactInfo() : ContactInfo
    {
        return $this->contactRepository->getContactInfo();
    }

    function addContactData(array $Data)
    {
        $contactData = $this->createContactData($Data);

        $this->contactRepository->addContactData($contactData);
    }

    function deleteContactData(array $Data)
    {
        $contactData = $this->createContactData($Data);

        $this->contactRepository->deleteContactData($contactData);
    }

    function updateContactData(array $Data)
    {
        $contactData = $this->createContactData($Data);

        $this->contactRepository->updateContactData($contactData);
    }

    private function createContactData(array $Data) : ContactData
    {
        $speltak = htmlspecialchars($Info['speltak']);
        $functie = htmlspecialchars($Info['functie']);
        $naam = htmlspecialchars($Info['naam']);
        $email = htmlspecialchars($Info['email']);
        $telefoonnummer = htmlspecialchars($Info['telefoonnummer']);

        return new ContactData($speltak, $functie, $naam, $email, $telefoonnummer);
    }

}