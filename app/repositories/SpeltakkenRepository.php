<?php

namespace Repositories;

use Models\Speltak;
use PDO;

class SpeltakkenRepository extends BaseRepository
{
    function getWelpenInfo() : Speltak
    {
        try {
            $stmt = $this->connection->prepare('SELECT s.naam, c.email, c.telefoonnummer, i.tekst
                                        FROM SpeltakInfo AS i
                                        JOIN Speltak AS s ON s.id = i.speltakId
                                        JOIN ContactInfo AS c ON c.id = i.contactId	
                                        WHERE s.naam = "Welpen"');
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createSpeltak($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Error getting Welpen info: " . $e->getMessage()
            );
        }
    }

    private function createSpeltak($obj) : Speltak
    {
        return new Speltak(
            $obj->naam ?? "", 
            $obj->email ?? "", 
            $obj->telefoonnummer ?? "",	 
            $obj->tekst ?? ""
        );
    }
}