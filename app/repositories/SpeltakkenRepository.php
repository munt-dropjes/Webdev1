<?php

namespace Repositories;

use Models\Speltak;
use PDO;

class SpeltakkenRepository extends BaseRepository
{
    function getSpeltakInfo($speltak) : Speltak
    {
        try {
            $stmt = $this->connection->prepare('SELECT s.naam, c.email, c.telefoonnummer, i.leeftijd, i.tijden, i.tekst
                                        FROM SpeltakInfo AS i
                                        JOIN Speltak AS s ON s.id = i.speltakId
                                        LEFT OUTER JOIN ContactInfo AS c ON c.id = s.contactId	
                                        WHERE s.naam = ?');
            $stmt->execute([$speltak]);
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createSpeltak($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de speltak info: " . $e->getMessage()
            );
        }
    }

    private function createSpeltak($obj) : Speltak
    {
        return new Speltak(
            $obj->naam ?? "404", 
            $obj->email ?? "", 
            $obj->telefoonnummer ?? "",	 
            $obj->leeftijd ?? "",
            $obj->tijden ?? "",
            $obj->tekst ?? "Er is nog geen informatie beschikbaar."
        );
    }
}