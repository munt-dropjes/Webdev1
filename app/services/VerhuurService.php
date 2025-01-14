<?php

namespace Services;

use Repositories\VerhuurRepository;
use Models\VerhuurInfo;
use Models\VerhuurData;

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

    function addVerhuurData(array $data)
    {
        $verhuurData = new VerhuurData($data['verhuurWeek'], $data['startDatum'], $data['eindDatum'], $data['beschikbaarheid']);

        $this->verhuurRepository->addVerhuurData($verhuurData);
    }

    function deleteVerhuurData(array $data)
    {
        $verhuurData = new VerhuurData($data['verhuurWeek'], $data['startDatum'], $data['eindDatum'], $data['beschikbaarheid']);
        
        $this->verhuurRepository->deleteVerhuurData($verhuurData);
    }

    function updateVerhuurData(array $data)
    {
        $verhuurInfo = new VerhuurInfo();
        $verhuurInfo->setVerhuurInfo($data['verhuurInfo']);
        $this->verhuurRepository->updateVerhuurInfo($verhuurInfo);
    }

}