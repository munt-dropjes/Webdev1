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
        $verhuurData = $this->createVerhuurData($data);

        $this->verhuurRepository->addVerhuurData($verhuurData);
    }

    function deleteVerhuurData(array $data)
    {
        $verhuurData = $this->createVerhuurData($data);

        $this->verhuurRepository->deleteVerhuurData($verhuurData);
    }

    function updateVerhuurData(array $data)
    {
        $verhuurData = $this->createVerhuurData($data);

        $this->verhuurRepository->updateVerhuurData($verhuurData);
    }

    private function createVerhuurData(array $data) : VerhuurData
    {
        $verhuurWeek = htmlspecialchars($data['verhuurWeek']);
        $startDatum = htmlspecialchars($data['startDatum']);
        $eindDatum = htmlspecialchars($data['eindDatum']);
        $beschikbaarheid = htmlspecialchars($data['beschikbaarheid']);

        return new VerhuurData($verhuurWeek, $startDatum, $eindDatum, $beschikbaarheid);
    }

}