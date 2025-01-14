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
        print_r($data);

        $verhuurData = new VerhuurData($data['verhuurWeek'], $data['startDatum'], $data['eindDatum'], $data['beschikbaarheid']);

        print_r($verhuurData);

        $this->verhuurRepository->addVerhuurData($verhuurData);
    }

    function updateVerhuurData(array $data)
    {
        $verhuurInfo = new VerhuurInfo();
        $verhuurInfo->setVerhuurInfo($data['verhuurInfo']);
        $this->verhuurRepository->updateVerhuurInfo($verhuurInfo);
    }

}