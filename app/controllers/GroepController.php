<?php

namespace Controllers;

use Services\ExceptionService;
use Services\GroepService;

class GroepController extends Controller
{
    private $exceptionService;
    private $groepService;
    function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->groepService = new GroepService();
    }

    function index() : void
    {
        $this->view('groep/index');
    }

    function geschiedenis() : void
    {
        $this->view('groep/geschiedenis/index');
    }

    function cadugraaf() : void
    {
        try {
            $this->view('groep/cadugraaf', ['cadugraaf' => $this->groepService->getCadugraaf()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('groep/cadugraaf', ['error' => $e->getMessage()]);
        }
    }

    function smoelenboek() : void
    {
        try {
            $this->view('groep/document', ['document' => $this->groepService->getSmoelenboek()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('groep/document', ['error' => $e->getMessage()]);
        }
    }

    function vertrouwenspersoon() : void
    {
        try {
            $this->view('groep/document', ['document' => $this->groepService->getVertrouwenspersoon()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('groep/document', ['error' => $e->getMessage()]);
        }
    }

    function privacy() : void
    {
        try {
            $this->view('groep/document', ['document' => $this->groepService->getPrivacy()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('groep/document', ['error' => $e->getMessage()]);
        }
    }

    function aanmelding() : void
    {
        try {
            $this->view('groep/document', ['document' => $this->groepService->getAanmelding()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('groep/document', ['error' => $e->getMessage()]);
        }
    }
}