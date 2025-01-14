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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['add']))
                $this->verhuurService->addVerhuurData($_POST);
            else if (isset($_POST['delete']))
                $this->verhuurService->deleteVerhuurData($_POST);
            else if (isset($_POST['update']))
                $this->verhuurService->updateVerhuurData($_POST);
        }
        
        $this->view('admin/verhuur', ['verhuurInfo' => $this->verhuurService->getVerhuurInfo()]);
    }
}