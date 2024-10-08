<?php

namespace Repositories;

use Models\User;
use PDO;

class UserRepository extends BaseRepository
{
    public function create(User $user): void
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO Users (name, email, password) VALUES (?, ?, ?)');
            $stmt->execute([$user->name, $user->email, $user->password]);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $user->email . " not created. Error: " . $e->getCode()
            );
        }
    }

    public function fetchOneByEmail($email): User|null
    {
        try {
            $stmt = $this->connection->prepare('SELECT u.id, u.name, u.email, u.password
                                            FROM Users AS u
                                            WHERE email = ?');
            $stmt->execute([$email]);
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createUserFromObject($obj);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $email . " not found. Error: " . $e->getCode()
            );
        }
    }
    private function createUserFromObject($obj): User
    {
        if (!$obj) {
            return new User();
        }
        return new User(
            $obj->id ?? 0,
            $obj->name ?? "",
            $obj->email ?? "",
            $obj->password ?? ""
        );
    }
}