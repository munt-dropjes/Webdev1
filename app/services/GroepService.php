<?php

namespace Services;

use Repositories\GroepRepository;
use Models\Document;

class GroepService
{
    private $groepRepository;

    function __construct()
    {
        $this->groepRepository = new GroepRepository();
    }

    // momenteel zijn deze bestanden nog te groot, hiervoor moet de database nog worden aangepast
    // function getCadugraaf() : array
    // {
    //     return $this->groepRepository->getCadugraaf();
    // }

    function getSmoelenboek() : Document
    {
        return $this->groepRepository->getSmoelenboek();
    }

    function getVertrouwenspersoon() : Document
    {
        return $this->groepRepository->getVertrouwenspersoon();
    }

    function getPrivacy() : Document
    {
        return $this->groepRepository->getPrivacy();
    }
}