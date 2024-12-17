<?php

namespace Controllers;

use Services\SpeltakkenService;

class SpeltakkenController extends Controller
{
    private $speltakkenService;
    function __construct()
    {
        $this->speltakkenService = new SpeltakkenService();
    }

    function welpen() : void
    {
        $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Welpen")]);
    }

    function verkenners() : void
    {
        $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Verkenners")]);
    }

    function rowans() : void
    {
        $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Rowans")]);
    }

    function rovers() : void
    {
        $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Rovers")]);
    }

    function stam() : void
    {
        $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Stam")]);
    }

    function programma($speltakNaam) : void
    {
        console_log("hallotjes");

        $this->view('speltakken/programma', ['jaarplanning' => $this->speltakkenService->getProgramma($speltakNaam)]);
    }

    function foto($speltakNaam) : void
    {
        $this->view('speltakken/foto', ['foto' => $this->speltakkenService->getFoto($speltakNaam)]);
    }

    function boekjes($speltakNaam) : void
    {
        $this->view('speltakken/boekjes', ['boekjes' => $this->speltakkenService->getBoekjes($speltakNaam)]);
    }
}