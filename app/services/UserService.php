<?php

namespace Services;

use Models\User;
use Repositories\UserRepository;

class UserService 
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function fetchOneByEmail ($email): User|null
    {
        return $this->userRepository->fetchOneByEmail($email);
    }

    public function create($user) : User
    {
        return $this->userRepository->create($user);
    }

    public function fetchOneById($id) : User|null
    {
        return $this->userRepository->fetchOneById($id);
    }

    public function update($user, $id) : User
    {
        return $this->userRepository->update($user, $id);
    }

    public function delete($id) : void
    {
        $this->userRepository->delete($id);
    }

    public function fetchAll() : array
    {
        return $this->userRepository->fetchAll();
    }
}