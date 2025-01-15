<?php

namespace Services;

use Repositories\ContactRepository;
use Models\ContactInfo;
use Models\ContactData;

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
        $id = htmlspecialchars($Data['id']);
        $speltak = htmlspecialchars($Data['speltak']);
        $functie = htmlspecialchars($Data['functie']);
        $naam = htmlspecialchars($Data['naam']);
        $email = htmlspecialchars($Data['email']);
        $telefoonnummer = htmlspecialchars($Data['telefoonnummer']);

        return new ContactData($id, $speltak, $functie, $naam, $email, $telefoonnummer);
    }

}