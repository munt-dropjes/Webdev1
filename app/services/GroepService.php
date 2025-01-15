<?php

namespace Services;

use Repositories\GroepRepository;

class GroepService
{
    private GroepRepository $groepRepository;

    function __construct()
    {
        $this->groepRepository = new GroepRepository();
    }

    function getCadugraaf(): string
    {
        return $this->groepRepository->fetchCadugraaf();
    }

    function getSmoelenboek(): string
    {
        return $this->groepRepository->fetchSmoelenboek();
    }

    function getVertrouwenspersoon(): string
    {
        return $this->groepRepository->fetchVertrouwenspersoon();
    }

    function getPrivacy(): string
    {
        return $this->groepRepository->fetchPrivacy();
    }
}