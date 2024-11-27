<?php

namespace Controllers;

use Services\VerhuurService;

class VerhuurController extends Controller
{
    private $verhuurService;
    function __construct()
    {
        $this->verhuurService = new VerhuurService();
    }

    function index() : void
    {
        $this->view('verhuur/index', ['verhuurInfo' => $this->verhuurService->getVerhuurInfo()]);
    }
}