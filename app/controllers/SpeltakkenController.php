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
        $this->view('speltakken/welpen/index', ['welpenInfo' => $this->speltakkenService->getWelpenInfo()]);
    }

    function verkenners() : void
    {
        $this->view('speltakken/verkenners/index', ['verkennersInfo' => $this->speltakkenService->getVerkennersInfo()]);
    }

    function rowans() : void
    {
        $this->view('speltakken/rowans/index');
    }

    function rovers() : void
    {
        $this->view('speltakken/rovers/index');
    }

    function stam() : void
    {
        $this->view('speltakken/stam/index');
    }
}