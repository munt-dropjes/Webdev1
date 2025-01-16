<?php

namespace Controllers;

use Services\ExceptionService;
use Services\VerhuurService;
use Services\ContactService;
use Services\GroepService;

class AdminController extends Controller
{
    //all admin routes are checked for authentication in the public/index.php file

    private $verhuurService;
    private $contactService;
    private $groepService;
    private $exceptionService;

    public function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->verhuurService = new VerhuurService();
        $this->contactService = new ContactService();
        $this->groepService = new GroepService();
    }
    
    public function index()
    {
        $this->view('admin/index');
    }

    public function verhuur()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['add']))
                    $this->verhuurService->addVerhuurData($_POST);
                    else if (isset($_POST['delete']))
                    $this->verhuurService->deleteVerhuurData($_POST);
                    else if (isset($_POST['update']))
                    $this->verhuurService->updateVerhuurData($_POST);

            }            
            $this->view('admin/verhuur', ['verhuurInfo' => $this->verhuurService->getVerhuurInfo()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('admin/verhuur', ['error' => $e->getMessage()]);
        }
    }

    public function contact()
    {        
        try{
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    if (isset($_POST['add']))
                    $this->contactService->addContactData($_POST);
                    else if (isset($_POST['delete']))
                    $this->contactService->deleteContactData($_POST);
                    else if (isset($_POST['update']))
                    $this->contactService->updateContactData($_POST);
            }            
            $this->view('admin/contact', ['contactInfo' => $this->contactService->getContactInfo()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('admin/contact', ['error' => $e->getMessage()]);
        }
    }

    public function documenten()
    {
        try{
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    if (isset($_POST['add']))
                    $this->groepService->addDocument($_POST);
                    else if (isset($_POST['delete']))
                    $this->groepService->deleteDocument($_POST);
                    else if (isset($_POST['update']))
                    $this->groepService->updateDocument($_POST)
            }

            $this->view('admin/documenten', [
        //        'cadugraaf' => $this->groepService->getCadugraaf(),
                'smoelenboek' => $this->groepService->getSmoelenboek(),
                'vertrouwenspersoon' => $this->groepService->getVertrouwenspersoon(),
                'privacy' => $this->groepService->getPrivacy()
            ]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('admin/documenten', ['error' => $e->getMessage()])
        }
    }
}