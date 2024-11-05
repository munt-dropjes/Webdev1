<?php

namespace Controllers;

use Services\UserService;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function account() : void
    {
        $this->view('user/account');
    }
}
