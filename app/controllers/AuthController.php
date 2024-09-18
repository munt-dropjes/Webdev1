<?php

namespace Controllers;

use Services\AuthService;

class AuthController extends Controller
{
    function login() : void
    {
        $this->view('auth/login');

        //if post then login
    }

    function register() : void
    {
        $this->view('auth/register');

        //if post then register
    }

    function logout() : void
    {
        $this->view('auth/logout');

        //if post then logout
    }

    function forgotPassword() : void
    {
        $this->view('auth/forgot-password');

        //if post then send email
    }

    function resetPassword() : void
    {
        $this->view('auth/reset-password');

        //if post then reset password
    }

    function changePassword() : void
    {
        $this->view('auth/change-password');

        //if post then change password
    }
}