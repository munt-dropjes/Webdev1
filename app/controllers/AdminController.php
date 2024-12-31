<?php

namespace Controllers;

class AdminController extends Controller
{
    //all admin routes are checked for authentication in the public/index.php file

    public function index()
    {
        $this->view('admin/index');
    }
}