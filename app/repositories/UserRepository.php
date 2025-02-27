<?php

namespace Repositories;

use Models\User;
use PDO;

class UserRepository extends BaseRepository
{
    public function create(User $user): User
    {
        try {
            $stmt = $this->connection->prepare('INSERT INTO Users (name, email, password) VALUES (?, ?, ?)');
            $stmt->execute([$user->name, $user->email, $user->password]);
            return $this->fetchOneByEmail($user->email);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $user->email . " not created. Error: " . $e->getCode()
            );
        }
    }

    public function fetchOneByEmail($email): User|null
    {
        try {
            $stmt = $this->connection->prepare('SELECT u.id, u.name, u.email, u.password, r.role
                                                FROM Users AS u
                                                JOIN Roles AS r ON u.roleId = r.id
                                                WHERE u.email = ?');
            $stmt->execute([$email]);
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createUserFromObject($obj);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $email . " not found. Error: " . $e->getCode()
            );
        }
    }

    public function fetchOneById($id): User|null
    {
        try {
            $stmt = $this->connection->prepare('SELECT u.id, u.name, u.email, u.password, r.role
                                                FROM Users AS u
                                                JOIN Roles AS r ON u.roleId = r.id
                                                WHERE u.id = ?');
            $stmt->execute([$id]);
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->createUserFromObject($obj);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $id . " not found. Error: " . $e->getCode()
            );
        }
    }

    public function update(User $user, $id): User
    {
        try {
            $stmt = $this->connection->prepare('UPDATE Users SET name = ?, email = ?, password = ? WHERE id = ?');
            $stmt->execute([$user->name, $user->email, $user->password, $id]);
            return $this->fetchOneById($id);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $id . " not updated. Error: " . $e->getCode()
            );
        }
    }

    public function delete($id): void
    {
        try {
            $stmt = $this->connection->prepare('DELETE FROM Users WHERE id = ?');
            $stmt->execute([$id]);
        } catch (Exception $e) {
            throw new Exception(
                "User: " . $id . " not deleted. Error: " . $e->getCode()
            );
        }
    }

    public function fetchAll(): array
    {
        try {
            $stmt = $this->connection->prepare('SELECT u.id, u.name, u.email, u.password, r.role
                                                FROM Users AS u
                                                JOIN Roles AS r ON u.roleId = r.id');
            $stmt->execute();
            $users = [];
            while ($obj = $stmt->fetch(PDO::FETCH_OBJ)) {
                $users[] = $this->createUserFromObject($obj);
            }
            return $users;
        } catch (Exception $e) {
            throw new Exception(
                "Users not found. Error: " . $e->getCode()
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
            $obj->password ?? "",
            $obj->role ?? ""
        );
    }
}