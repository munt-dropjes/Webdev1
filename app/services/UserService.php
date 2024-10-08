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

    public function fetchOneByEmail ($email): User
    {
        return $this->userRepository->fetchOneByEmail($email);
    }

    public function create($user) : void
    {
        $this->userRepository->create($user);
    }
}