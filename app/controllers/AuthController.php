<?php

namespace Controllers;

use Services\AuthService;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    function login() : void
    {
        if($_POST) {
            try {
                if($this->authService->login($_POST['email'], $_POST['password'])) {
                    header('Location: /');
                }
            } catch (Exception $e) {
                echo $e->getMessage(); //TODO: goes to exception service
                $this->view('authentication/login', ['error' => $e->getMessage()]);
            }
        }

        $this->view('authentication/login');
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