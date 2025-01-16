<?php

namespace Controllers;

use Services\ExceptionService;
use Services\VerhuurService;

class VerhuurController extends Controller
{
    private $exceptionService;
    private $verhuurService;
    function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->verhuurService = new VerhuurService();
    }

    function index() : void
    {
        try {
            $this->view('verhuur/index', ['verhuurInfo' => $this->verhuurService->getVerhuurInfo()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('verhuur/index', ['error' => $e->getMessage()]);
        }
    }
}