<?php

namespace Repositories;

use Models\VerhuurInfo;
use Models\VerhuurData;
use PDO;

class VerhuurRepository extends BaseRepository
{
    function getVerhuurInfo() : VerhuurInfo
    {
        try {
            $stmt = $this->connection->prepare('SELECT v.id, v.beginDatum, v.eindDatum, v.beschikbaar
                                        FROM VerhuurInfo AS v');
            $stmt->execute();
            $obj = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $this->createVerhuurInfo($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de verhuur info: " . $e->getMessage()
            );
        }
    }
    
    function addVerhuurData(VerhuurData $verhuurData)
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO VerhuurInfo (id, beginDatum, eindDatum, beschikbaar) 
                                        VALUES (:id, :beginDatum, :eindDatum, :beschikbaar)');
            $stmt->bindParam(':id', $verhuurData->verhuurWeek);
            $stmt->bindParam(':beginDatum', $verhuurData->startDatum);
            $stmt->bindParam(':eindDatum', $verhuurData->eindDatum);
            $stmt->bindParam(':beschikbaar', $verhuurData->beschikbaarheid);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het toevoegen van de verhuur data: " . $e->getMessage()
            );
        }
    }

    function deleteVerhuurData(VerhuurData $verhuurData)
    {
        try {
            $stmt = $this->connection->prepare('DELETE FROM VerhuurInfo WHERE id = :id');
            $stmt->bindParam(':id', $verhuurData->verhuurWeek);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het verwijderen van de verhuur data: " . $e->getMessage()
            );
        }
    }

    function updateVerhuurData(VerhuurData $verhuurData)
    {
        try {
            $stmt = $this->connection->prepare('UPDATE VerhuurInfo SET beginDatum = :beginDatum, eindDatum = :eindDatum, beschikbaar = :beschikbaar
                                        WHERE id = :id');
            $stmt->bindParam(':beginDatum', $verhuurData->startDatum);
            $stmt->bindParam(':eindDatum', $verhuurData->eindDatum);
            $stmt->bindParam(':beschikbaar', $verhuurData->beschikbaarheid);
            $stmt->bindParam(':id', $verhuurData->verhuurWeek);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het updaten van de verhuur data: " . $e->getMessage()
            );
        }
    }

    
    private function createVerhuurInfo($obj) : VerhuurInfo
    {
        $array = [];

        foreach($obj as $row) {
            $verhuurData = new VerhuurData(
                $row->id ?? "404",
                $row->beginDatum ?? "",
                $row->eindDatum ?? "",
                $row->beschikbaar ?? ""
            );
           
            array_push($array, $verhuurData);
        };

        return new VerhuurInfo($array);
    }
}