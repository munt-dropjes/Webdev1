<?php

namespace Repositories;

use Models\Document;
use PDO;

class GroepRepository extends BaseRepository
{
    // function getCadugraaf() : Document

    function getSmoelenboek() : Document
    {
        try {
            $stmt = $this->connection->prepare('SELECT d.id, dt.type, d.titel, d.document, d.editie
                                                FROM Documenten AS d
                                                JOIN DocumentType AS dt ON d.typeId = dt.id
                                                WHERE dt.type = "Smoelenboek"');
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createDocument($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van het smoelenboek: " . $e->getMessage()
            );
        }
    }

    function getVertrouwenspersoon() : Document
    {
        try {
            $stmt = $this->connection->prepare('SELECT d.id, dt.type, d.titel, d.document, d.editie
                                                FROM Documenten AS d
                                                JOIN DocumentType AS dt ON d.typeId = dt.id
                                                WHERE dt.type = "Vertrouwenspersoon"');
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createDocument($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de vertrouwenspersonen: " . $e->getMessage()
            );
        }
    }

    function getPrivacy() : Document
    {
        try {
            $stmt = $this->connection->prepare('SELECT d.id, dt.type, d.titel, d.document, d.editie
                                                FROM Documenten AS d
                                                JOIN DocumentType AS dt ON d.typeId = dt.id
                                                WHERE dt.type = "Privacyverklaring"');
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createDocument($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de privacyverklaring: " . $e->getMessage()
            );
        }
    }

    private function createDocument($obj) : Document
    {
        return new Document(
            $obj->id,
            $obj->type,
            $obj->titel,
            $obj->document,
            $obj->editie
        );
    }
}