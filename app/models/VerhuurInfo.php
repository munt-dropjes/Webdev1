<?php

namespace Models;

class VerhuurInfo 
{
    public int $verhuurWeek;
    public ?string $startDatum;
    public ?string $eindDatum;
    public bool $beschikbaarheid;

    function __construct($verhuurWeek, $startDatum, $eindDatum, $beschikbaarheid)
    {
        $this->verhuurWeek = $verhuurWeek;
        $this->startDatum = $startDatum;
        $this->eindDatum = $eindDatum;
        $this->beschikbaarheid = $beschikbaarheid;
    }
}