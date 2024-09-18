<?php

namespace Controllers;

use Services\ContactService;

class ContactController extends Controller
{
    function index() : void
    {
        $this->view('contact/index');
    }
}
