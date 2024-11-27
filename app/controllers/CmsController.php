<?php

namespace Controllers;

class CmsController extends BaseController
{
    //all cms routes are checked for authentication in the public/index.php file

    public function index()
    {
        $this->view('cms/index');
    }
}