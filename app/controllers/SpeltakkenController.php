<?php

namespace Controllers;

use Services\SpeltakkenService;

class SpeltakkenController extends Controller
{
    function welpen() : void
    {
        $this->view('speltakken/welpen/index');
    }

    function verkenners() : void
    {
        $this->view('speltakken/verkenners/index');
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