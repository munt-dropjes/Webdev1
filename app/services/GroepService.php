<?php

namespace Services;

use Repositories\DocumentRepository;
use Models\Document;

class GroepService
{
    private $documentRepository;
    function __construct()
    {
        $this->documentRepository = new DocumentRepository();
    }

    function getCadugraaf() : array
    {
        return $this->documentRepository->getManyDocuments("Cadugraaf");
    }

    function getSmoelenboek() : Document
    {
        return $this->documentRepository->getDocument("Smoelenboek", null);
    }

    function getVertrouwenspersoon() : Document
    {
        return $this->documentRepository->getDocument("Vertrouwenspersoon", null);
    }

    function getPrivacy() : Document
    {
        return $this->documentRepository->getDocument("Privacyverklaring", null);
    }

    function getAanmelding() : Document
    {
        return $this->documentRepository->getDocument("Aanmeldingsprocedure", null);
    }
}