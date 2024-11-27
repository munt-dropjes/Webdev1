<?php

namespace Repositories;

use Models\VerhuurInfo;
use PDO;

class VerhuurRepository extends BaseRepository
{
    function getVerhuurInfo() : VerhuurInfo
    {
        try {
            $stmt = $this->connection->prepare('SELECT v.id, v.beginDatum, v.eindDatum, v.beschikbaar
                                        FROM VerhuurInfo AS v');
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createVerhuurInfo($obj);
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het ophalen van de verhuur info: " . $e->getMessage()
            );
        }
    }

    private function createVerhuurInfo($obj) : VerhuurInfo
    {
        return new VerhuurInfo(
            $obj->id ?? null,
            $obj->beginDatum ?? "404",
            $obj->eindDatum ?? "Er is nog geen informatie beschikbaar",
            $obj->beschikbaar ?? false
        );
    }
}