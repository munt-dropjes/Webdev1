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

    function programma() : void
    {
        $speltakNaam = $this->getSpeltakNaam();

        echo $speltakNaam;

        $this->view('speltakken/programma', ['jaarplanning' => $this->speltakkenService->getProgramma($speltakNaam)]);
    }

    function foto() : void
    {
        $speltakNaam = $this->getSpeltakNaam();

        $this->view('speltakken/foto', ['foto' => $this->speltakkenService->getFoto($speltakNaam)]);
    }

    function boekjes() : void
    {
        $speltakNaam = $this->getSpeltakNaam();

        $this->view('speltakken/boekjes', ['boekjes' => $this->speltakkenService->getBoekjes($speltakNaam)]);
    }

    private function getSpeltakNaam() : string
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        return $url_array[1]; //gets speltak in url: www.example.com/SPELTAK/FUNCTIE
    }
}