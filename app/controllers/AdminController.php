<?php

namespace Controllers;

use Services\VerhuurService;
use Services\ContactService;

class AdminController extends Controller
{
    //all admin routes are checked for authentication in the public/index.php file

    private $verhuurService;
    private $contactService;
    function __construct()
    {
                
    }
    
    public function index()
    {
        $this->view('admin/index');
    }

    public function verhuur()
    {
        $this->verhuurService = new VerhuurService();

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

    public function contact()
    {
        print_r($_POST);
        
        $this->contactService = new ContactService();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['add']))
                $this->contactService->addContactData($_POST);
            else if (isset($_POST['delete']))
                $this->contactService->deleteContactData($_POST);
            else if (isset($_POST['update']))
                $this->contactService->updateContactData($_POST);
        }
        
        $this->view('admin/contact', ['contactInfo' => $this->contactService->getContactInfo()]);
    }
}