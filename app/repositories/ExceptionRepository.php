<?php

namespace Repositories;

use Exception;

class ExceptionRepository extends BaseRepository
{
    function logException(Exception $exception)
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO ErrorLog (code, message, stackTrace) 
                                        VALUES (:code, :message, :stackTrace)');
            $stmt->bindParam(':code', $exception->getCode());
            $stmt->bindParam(':message', $exception->getMessage());
            $stmt->bindParam(':stackTrace', $exception->getTraceAsString());
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het loggen van de exception: " . $e->getMessage()
            );
        }
    }
}