<?php

namespace Controllers;

use Services\ContactService;

class ContactController extends Controller
{
    private $contactService;
    function __construct()
    {
        $this->contactService = new ContactService();
    }

    function index() : void
    {
        $this->view('contact/index', ['contactInfo' => $this->contactService->getContactInfo()]);
    }
}
