<?php

namespace Controllers;

use Services\GroepService;

class GroepController extends Controller
{
    private GroepService $groepService;
    function __construct()
    {
        $this->groepService = new GroepService();
    }

    function index() : void
    {
        $this->view('groep/index');
    }

    function geschiedenis() : void
    {
        $this->view('groep/geschiedenis');
    }

    function cadugraaf() : void
    {
        $this->view('groep/cadugraaf', ['cadugraaf' => $this->groepService->getCadugraaf()]);
    }

    function smoelenboek() : void
    {
        $this->view('groep/smoelenboek', ['smoelenboek' => $this->groepService->getSmoelenboek()]);
    }

    function vertrouwenspersoon() : void
    {
        $this->view('groep/vertrouwenspersoon', ['vertrouwenspersoon' => $this->groepService->getVertrouwenspersoon()]);
    }

    function privacy() : void
    {
        $this->view('groep/privacy', ['privacy' => $this->groepService->getPrivacy()]);
    }

    function aanmelding() : void
    {
        $this->view('groep/aanmelding');
    }
}