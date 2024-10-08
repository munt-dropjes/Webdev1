<?php

namespace Controllers;

class Controller
{
    public function view($viewPath, $data = []) : void
    {
        //extract variables to be used in the view
        extract($data);

        //default header
        //require_once __DIR__ . '/../views/components/header.php'; TODO: remove //

        //check if the view exists
        if (file_exists(__DIR__ . '/../views/' . $viewPath . '.php')) {
            require_once __DIR__ . '/../views/' . $viewPath . '.php';
        } else {
            $this->fourOFour();
        }

        //default footer
        require_once __DIR__ . '/../views/components/footer.php';
    }

    public function fourOFour() : void
    {
        $this->view('404/index');
    }
}