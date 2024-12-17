<?php

namespace Controllers;

use Services\GroepService;

class GroepController extends Controller
{
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
        $this->view('groep/cadugraaf');
    }

    function smoelenboek() : void
    {
        $this->view('groep/smoelenboek');
    }

    function vertrouwenspersoon() : void
    {
        $this->view('groep/vertrouwenspersoon');
    }

    function privacy() : void
    {
        $this->view('groep/privacy');
    }

    function aanmelding() : void
    {
        $this->view('groep/aanmelding');
    }
}