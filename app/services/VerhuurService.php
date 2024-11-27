<?php

namespace Services;

use Repositories\VerhuurRepository;
use Models\VerhuurInfo;

class VerhuurService
{
    private $verhuurRepository;
    function __construct()
    {
        $this->verhuurRepository = new VerhuurRepository();
    }

    function getVerhuurInfo() : VerhuurInfo
    {
        return $this->verhuurRepository->getVerhuurInfo();
    }

}