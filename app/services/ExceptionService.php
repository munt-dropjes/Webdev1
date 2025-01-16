<?php

namespace Services;

use Repositories\ExceptionRepository;
use Exception;

class ExceptionService
{
    private $exceptionRepository;
    function __construct()
    {
        $this->exceptionRepository = new ExceptionRepository();
    }

    public function logException(Exception $exception)
    {
        $this->exceptionRepository->logException($exception);
    }
}