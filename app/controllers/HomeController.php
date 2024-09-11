<?php

namespace Controllers;

use Services\HomeService;

class HomeController extends Controller
{
    // private $homeService;
    // function __construct()
    // {
    //     $this->homeService = new HomeService();
    // }

    function index() : void
    {
        $this->view('home/index');
    }
}