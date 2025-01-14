<?php

namespace Models;

class VerhuurData
{
    public int $verhuurWeek;
    public ?string $startDatum;
    public ?string $eindDatum;
    public int $beschikbaarheid;

    function __construct($verhuurWeek, $startDatum, $eindDatum, $beschikbaarheid)
    {
        $this->verhuurWeek = $verhuurWeek;
        $this->startDatum = $startDatum;
        $this->eindDatum = $eindDatum;
        $this->beschikbaarheid = $beschikbaarheid;
    }

    function setVerhuurWeek($verhuurWeek)
    {
        $this->verhuurWeek = $verhuurWeek;
    }
    function setStartDatum($startDatum)
    {
        $this->startDatum = $startDatum;
    }
    function setEindDatum($eindDatum)
    {
        $this->eindDatum = $eindDatum;
    }
    function setBeschikbaarheid($beschikbaarheid)
    {
        $this->beschikbaarheid = $beschikbaarheid;
    }
}