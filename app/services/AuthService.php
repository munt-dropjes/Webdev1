<?php

namespace Services;

use Exception;
use Models\User;
use Services\UserService;

class AuthService
{
    // execute login form
    public function executeLoginForm()
    {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            //htmlspecialchars to prevent XSS attacks
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // get user from database
            try {
                $user = $this->userService->read($email);
            } catch(Exception $e) {
                $this->view('authentication/login', ['error' => $e->getMessage()]);
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
    // validate login fields 
        // password_verify 

    // execute register form 
        // mail filter
        // password hash
        // password validation

    // send confirmation email

    // execute forgot password form
        // read user by email
        // send email with reset link

    // execute reset password form
        // read user by token
        // password hash
        // password validation
}