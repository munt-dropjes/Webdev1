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
            echo "Er is iets fout gegaan met het ophalen van de contact info: " . $e->getMessage();
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