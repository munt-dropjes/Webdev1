<?php

namespace Controllers;

use Services\ExceptionService;
use Services\ContactService;

class ContactController extends Controller
{
    private $contactService;
    private $exceptionService;
    function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->contactService = new ContactService();
    }

    function index() : void
    {
        try {
            $this->view('contact/index', ['contactInfo' => $this->contactService->getContactInfo()]);
        } catch (Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('error/index', ['error' => $e->getMessage()]);
        }

    }
}
