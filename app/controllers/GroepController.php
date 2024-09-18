<?php

namespace Controllers;

use Services\GroepService;

class GroepController extends Controller
{
    function index() : void
    {
        $this->view('groep/index');
    }
}