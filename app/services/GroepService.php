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

    function addDocument(array $data)
    {
        $document = $this->createDocument($data);

        $this->groepRepository->addDocument($document);
    }

    function deleteDocument(array $data)
    {
        $this->groepRepository->deleteDocument($data['id']);
    }

    function updateDocument(array $data)
    {
        print_r("Data: ");
        print_r($data);

        $document = $this->createDocument($data);

        print_r("Document: ");
        print_r($document);

        $this->groepRepository->updateDocument($document);
    }

    private function createDocument(array $data) : Document
    {
        $id = htmlspecialchars($data['id']);
        $type = htmlspecialchars($data['type']);
        $titel = htmlspecialchars($data['titel']);
        $document = base64_encode($data['document']);
        $editie = htmlspecialchars($data['editie']);
        $speltak = htmlspecialchars($data['speltak']);

        print_r("CreateDocument: ");
        print_r($document);

        return new Document($id, $type, $titel, $document, $editie, $speltak);
    }
}