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

}