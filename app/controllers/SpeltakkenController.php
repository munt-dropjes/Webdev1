<?php

namespace Controllers;

use Services\ExceptionService;
use Services\SpeltakkenService;

class SpeltakkenController extends Controller
{
    private $exceptionService;
    private $speltakkenService;
    function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->speltakkenService = new SpeltakkenService();
    }

    function welpen() : void
    {
        try {
            $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Welpen")]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/index', ['error' => $e->getMessage()]);
        }
    }

    function verkenners() : void
    {
        try {
            $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Verkenners")]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/index', ['error' => $e->getMessage()]);
        }
    }

    function rowans() : void
    {
        try {
            $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Rowans")]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/index', ['error' => $e->getMessage()]);
        }
    }

    function rovers() : void
    {
        try {
            $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Rovers")]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/index', ['error' => $e->getMessage()]);
        }
    }

    function stam() : void
    {
        try {
            $this->view('speltakken/index', ['speltakInfo' => $this->speltakkenService->getSpeltakInfo("Stam")]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/index', ['error' => $e->getMessage()]);
        }
    }

    function programma() : void
    {
        try {
            $speltakNaam = $this->getSpeltakNaam();

            $this->view('speltakken/programma', ['programma' => $this->speltakkenService->getProgramma($speltakNaam)]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/programma', ['error' => $e->getMessage()]);
        }
    }

    function foto() : void
    {
        try {
            $speltakNaam = $this->getSpeltakNaam();

            $this->view('speltakken/foto', ['foto' => $this->speltakkenService->getFoto($speltakNaam)]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/foto', ['error' => $e->getMessage()]);
        }
    }

    function boekjes() : void
    {
        try {
            $speltakNaam = $this->getSpeltakNaam();

            $this->view('speltakken/boekjes', ['boekjes' => $this->speltakkenService->getBoekjes($speltakNaam)]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('speltakken/boekjes', ['error' => $e->getMessage()]);
        }
    }

    private function getSpeltakNaam() : string
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        return $url_array[1]; //gets speltak in url: www.example.com/SPELTAK/DETAIL
    }
}