<?php

namespace Services;

use Repositories\SpeltakkenRepository;
use Repositories\DocumentRepository;
use Models\Speltak;
use Models\Document;

class SpeltakkenService
{
    private $speltakkenRepository;
    private $documentenRepository;
    function __construct()
    {
        $this->speltakkenRepository = new SpeltakkenRepository();
        $this->documentenRepository = new DocumentRepository();
    }

    function getSpeltakInfo($speltak) : Speltak
    {
        return $this->speltakkenRepository->getSpeltakInfo($speltak);
    }

    function getProgramma($speltak) : Document
    {
        return $this->documentenRepository->getDocument('LTP', $speltak);
    }

    function getManyProgrammas() : array
    {
        return $this->documentenRepository->getManyDocuments('LTP');
    }

    function getBoekjes() : array
    {
        return $this->documentenRepository->getManyDocuments('Boekje');	
    }

}