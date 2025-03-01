<?php

namespace Repositories;

use PDO;
use Models\Document;

class DocumentRepository extends BaseRepository
{
    function getDocument($documentType, $speltak) : Document
    {
        try {
            $stmt = $this->connection->prepare('SELECT d.id, dt.type, d.titel, d.document, d.editie, s.naam AS speltak
                                                FROM Documenten AS d
                                                JOIN DocumentType AS dt ON d.typeId = dt.id
                                                LEFT JOIN Speltak AS s ON d.speltakId = s.id
                                                WHERE dt.type = :documentType');
            $stmt->bindParam(':documentType', $documentType);
            //$stmt->bindParam(':speltak', $speltak);
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createDocument($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de privacyverklaring: " . $e->getMessage()
            );
        }
    }

    function getManyDocuments($documentType) : array
    {
        try {
            $stmt = $this->connection->prepare('SELECT d.id, dt.type, d.titel, d.document, d.editie, s.naam AS speltak
                                                FROM Documenten AS d
                                                JOIN DocumentType AS dt ON d.typeId = dt.id
                                                LEFT JOIN Speltak AS s ON d.speltakId = s.id
                                                WHERE dt.type = :documentType');
            $stmt->bindParam(':documentType', $documentType);
            $stmt->execute();
            $obj = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $this->createManyDocuments($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de documenten: " . $e->getMessage()
            );
        }
    }

    function addDocument(Document $document)
    {
        try {
            $documentTypeId = $this->findDocumentTypeId($document->type);
            if ($document->speltak == null) {
                $speltakId = $this->findSpeltakId($document->speltak);
            }

            $stmt = $this->connection->prepare('INSERT INTO Documenten (typeId, titel, document, editie, speltakId)
                                                VALUES (:typeId, :titel, :document, :editie, :speltakId)');
            $stmt->bindParam(':typeId', $documentTypeId);
            $stmt->bindParam(':titel', $document->titel);
            $stmt->bindParam(':document', $document->document);
            $stmt->bindParam(':editie', $document->editie);
            $stmt->bindParam(':speltakId', $speltakId);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het toevoegen van het document: " . $e->getMessage()
            );
        }
    }

    function deleteDocument(int $document)
    {
        try {
            $stmt = $this->connection->prepare('DELETE FROM Documenten WHERE id = :id');
            $stmt->bindParam(':id', $document);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het verwijderen van het document: " . $e->getMessage()
            );
        }
    }

    function updateDocument(Document $document)
    {
        try {
            $documentTypeId = $this->findDocumentType($document->type);
            if ($document->speltak == null) {
                $speltakId = $this->findSpeltakId($document->speltak);
            }

            $stmt = $this->connection->prepare('UPDATE Documenten
                                                SET typeId = :typeId, titel = :titel, document = :document, editie = :editie, speltakId = :speltakId
                                                WHERE id = :id');
            $stmt->bindParam(':typeId', $documentTypeId);
            $stmt->bindParam(':titel', $document->titel);
            $stmt->bindParam(':document', $document->document);
            $stmt->bindParam(':editie', $document->editie);
            $stmt->bindParam(':speltakId', $speltakId);
            $stmt->bindParam(':id', $document->id);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het updaten van het document: " . $e->getMessage()
            );
        }
    }

    private function findDocumentTypeId($documentType) : int
    {
        try {
            $stmt = $this->connection->prepare('SELECT id FROM DocumentType WHERE type = :type');
            $stmt->bindParam(':type', $documentType);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ)->id;
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van het document type: " . $e->getMessage()
            );
        }
    }

    private function findSpeltakId($speltak) : int
    {
        try{
            $stmt = $this->connection->prepare("SELECT id FROM Speltak WHERE naam = :speltak");
            $stmt->bindParam(':speltak', $speltak);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_OBJ)->id;
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de speltak id: " . $e->getMessage()
            );
        }
    }

    private function createManyDocuments($obj) : array
    {
        $documents = [];

        foreach ($obj as $document) {
            $document = $this->createDocument($document);

            array_push($documents, $document);
        }

        return $documents;
    }

    private function createDocument($obj) : Document
    {
        return new Document(
            $obj->id,
            $obj->type,
            $obj->titel,
            $obj->document,
            $obj->editie,
            $obj->speltak
        );
    }
}