<?php

namespace Services;

use Repositories\SpeltakkenRepository;
use Models\Speltak;

class SpeltakkenService
{
    private $speltakkenRepository;

    function __construct()
    {
        $this->speltakkenRepository = new SpeltakkenRepository();
    }

    function getWelpenInfo() : Speltak
    {
        return $this->speltakkenRepository->getWelpenInfo();
    }

    function getVerkennersInfo() : Speltak
    {
        return $this->speltakkenRepository->getVerkennersInfo();
    }

    function getRowansInfo() : Speltak
    {
        return $this->speltakkenRepository->getRowansInfo();
    }

    function getRoversInfo() : Speltak
    {
        return $this->speltakkenRepository->getRoversInfo();
    }

    function getStamInfo() : Speltak
    {
        return $this->speltakkenRepository->getStamInfo();
    }
}