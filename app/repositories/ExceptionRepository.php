<?php

namespace Repositories;

use Exception;

class ExceptionRepository extends BaseRepository
{
    function logException(Exception $exception)
    {
        try {
            $errorMessage = $exception->getMessage();
            $errorCode = $exception->getCode();

            $stmt = $this->connection->prepare('INSERT INTO ErrorLog (code, message) 
                                        VALUES (:code, :message)');
            $stmt->bindParam(':code', $errorCode);
            $stmt->bindParam(':message', $errorMessage);
            $stmt->execute();
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het loggen van de exception: " . $e->getMessage()
            );
        }
    }
}