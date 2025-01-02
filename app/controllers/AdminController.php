<?php

namespace Controllers;

use Services\VerhuurService;

class AdminController extends Controller
{
    //all admin routes are checked for authentication in the public/index.php file

    private $verhuurService;
    function __construct()
    {
        $this->verhuurService = new VerhuurService();
    }
    
    public function index()
    {
        $this->view('admin/index');
    }

    public function verhuur()
    {
        $this->view('admin/verhuur', ['verhuurInfo' => $this->verhuurService->getVerhuurInfo()]);
    }
}