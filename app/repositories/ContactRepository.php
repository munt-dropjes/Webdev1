<?php

namespace Repositories;

use Models\ContactInfo;
use Models\ContactData;
use PDO;

class ContactRepository extends BaseRepository
{
    function getContactInfo() : ContactInfo
    {
        try {
            $stmt = $this->connection->prepare("SELECT c.id, s.naam AS speltak, c.functie, c.naam, c.email, c.telefoonnummer
                                        FROM ContactInfo AS c
                                        JOIN Speltak AS s ON c.speltakId = s.id");
            $stmt->execute();
            $obj = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $this->createContactInfo($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de contact info: " . $e->getMessage()
            );
        }
    }

    function addContactData(ContactData $contactData)
    {
        try {
            $speltakId = $this->findSpeltakId($contactData);

            $stmt = $this->connection->prepare("INSERT INTO ContactInfo (speltakId, functie, naam, email, telefoonnummer) 
                                        VALUES (:speltakId, :functie, :naam, :email, :telefoonnummer)");
            $stmt->bindParam(':speltakId', $speltakId);
            $stmt->bindParam(':functie', $contactData->functie);
            $stmt->bindParam(':naam', $contactData->naam);
            $stmt->bindParam(':email', $contactData->email);
            $stmt->bindParam(':telefoonnummer', $contactData->telefoonnummer);

            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het toevoegen van de contact info: " . $e->getMessage()
            );
        }
    }

    function deleteContactData(ContactData $contactData)
    {
        try {
            $stmt = $this->connection->prepare("DELETE FROM ContactInfo WHERE id = :id");
            $stmt->bindParam(':id', $contactData->id);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het verwijderen van de contact info: " . $e->getMessage()
            );
        }
    }

    function updateContactData(ContactData $contactData)
    {
        try {
            $speltakId = $this->findSpeltakId($contactData);

            $stmt = $this->connection->prepare("UPDATE ContactInfo SET speltakId = :speltakId, functie = :functie, naam = :naam, email = :email, telefoonnummer = :telefoonnummer
                                        WHERE id = :id");
            $stmt->bindParam(':speltakId', $speltakId);
            $stmt->bindParam(':functie', $contactData->functie);
            $stmt->bindParam(':naam', $contactData->naam);
            $stmt->bindParam(':email', $contactData->email);
            $stmt->bindParam(':telefoonnummer', $contactData->telefoonnummer);
            $stmt->bindParam(':id', $contactData->id);

            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het updaten van de contact info: " . $e->getMessage()
            );
        }
    }

    private function findSpeltakId($contactData) : int
    {
        try{
            $stmt = $this->connection->prepare("SELECT id FROM Speltak WHERE naam = :speltak");
            $stmt->bindParam(':speltak', $contactData->speltak);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_OBJ)->id;
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de speltak id: " . $e->getMessage()
            );
        }
    }

    private function createContactInfo($obj) : ContactInfo
    {
        $array = [];

        foreach ($obj as $row) {
            $contactData = new ContactData(
                $row->id ?? 0,
                $row->speltak ?? "",
                $row->functie ?? "404",
                $row->naam ?? "Not found",
                $row->email ?? "",
                $row->telefoonnummer ?? "" 
            );

            array_push($array, $contactData);
        };

        return new ContactInfo($array);
    }
}