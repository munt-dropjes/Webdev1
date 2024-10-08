<?php

namespace Services;

use Exception;
use Models\User;
use Services\UserService;

class AuthService
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    // execute login form
    public function executeLoginForm()
    {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            //htmlspecialchars to prevent XSS attacks
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // get user from database
            try {
                $user = $this->userService->fetchOneByEmail($email);
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }

            // check if user exists and password is correct
            if (password_verify($password, $user->password)) {
                // store user in session
                $_SESSION['user'] = $user;
                return true;
            } else {
                throw new Exception('Invalid email or password');
            }
        }
    }

    // execute register form 
    public function executeRegisterForm()
    {
        //check for empty fields
        if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirmation']))
        {
            //htmlspecialchars to prevent XSS attacks
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $passwordConfirmation = htmlspecialchars($_POST['password_confirmation']);

            $this->validateRegisterFields($email, $password, $passwordConfirmation);

            // create user
            $user = new User(
                "",
                $name,
                $email,
                // password hash    
                password_hash($password, PASSWORD_DEFAULT)
            );

            try {
                $this->userService->create($user);
            } catch(Exception $e) {
                throw new Exception('Something went wrong, with creating user');
            }

            header('Location: /login?user_created=true&email=' . $email);
        }
        throw new Exception('All fields are required');
    }
    private function validateRegisterFields($email, $password, $passwordConfirmation)
    {
        // mail filter
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email');
        }
        if ($password !== $passwordConfirmation) {
            throw new Exception('Passwords do not match');
        }
        if ($this->userService->fetchOneByEmail($email)->email === $email) {
            throw new Exception('Email already exists');
        }
    }

    // send confirmation email

    // execute forgot password form
        // read user by email
        // send email with reset link

    // execute reset password form
        // read user by token
        // password hash
        // password validation
}