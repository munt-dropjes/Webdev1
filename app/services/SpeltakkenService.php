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

    function getSpeltakInfo($speltak) : Speltak
    {
        return $this->speltakkenRepository->getSpeltakInfo($speltak);
    }

    function getProgramma($speltak) : array
    {
        return $this->speltakkenRepository->getProgramma($speltak);
    }

    function getFoto($speltak) : array
    {
        return $this->speltakkenRepository->getFoto($speltak);
    }

    function getBoekjes($speltak) : array
    {
        return $this->speltakkenRepository->getBoekjes($speltak);
    }

}