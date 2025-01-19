<?php

namespace Controllers;

use Services\ExceptionService;
use Services\VerhuurService;
use Services\ContactService;
use Services\GroepService;
use Services\DocumentService;

class AdminController extends Controller
{
    //all admin routes are checked for authentication in the public/index.php file

    private $verhuurService;
    private $contactService;
    private $groepService;
    private $exceptionService;
    private $documentService;

    public function __construct()
    {
        $this->exceptionService = new ExceptionService();
        $this->verhuurService = new VerhuurService();
        $this->contactService = new ContactService();
        $this->groepService = new GroepService();
        $this->documentService = new DocumentService();
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
                    $this->documentService->addDocument($_POST);
                    else if (isset($_POST['delete']))
                    $this->documentService->deleteDocument($_POST);
                    else if (isset($_POST['update']))
                    $this->documentService->updateDocument($_POST);
            }

            $this->view('admin/documenten', [
                'cadugraaf' => $this->groepService->getCadugraaf(),
                'smoelenboek' => $this->groepService->getSmoelenboek(),
                'vertrouwenspersoon' => $this->groepService->getVertrouwenspersoon(),
                'privacy' => $this->groepService->getPrivacy(),
                'aanmelding' => $this->groepService->getAanmelding()
            ]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('admin/documenten', ['error' => $e->getMessage()]);
        }
    }

    public function speltak()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['add']))
                    $this->documentService->addDocument($_POST);
                else if (isset($_POST['delete']))
                    $this->documentService->deleteDocument($_POST);
                else if (isset($_POST['update']))
                    $this->documentService->updateDocument($_POST);
            }

            $this->view('admin/speltak', ['speltak' => $this->groepService->getSpeltak()]);
        } catch (\Exception $e) {
            $this->exceptionService->logException($e);
            $this->view('admin/speltak', ['error' => $e->getMessage()]);
        }
    }
}