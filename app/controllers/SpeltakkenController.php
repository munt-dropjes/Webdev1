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
}