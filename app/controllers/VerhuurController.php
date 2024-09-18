<?php

namespace Controllers;

use Services\VerhuurService;

class VerhuurController extends Controller
{
    function index() : void
    {
        $this->view('verhuur/index');
    }
}