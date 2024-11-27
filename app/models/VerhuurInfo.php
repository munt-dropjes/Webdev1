<?php

namespace Models;

class VerhuurInfo 
{
    public array $verhuurData;

    function __construct($verhuurData)
    {
        $this->verhuurData = $verhuurData;
    }
}