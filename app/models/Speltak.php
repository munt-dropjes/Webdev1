<?php 

namespace Models;

class Speltak
{
    public string $naam;
    public ?string $email;
    public ?string  $telefoonnummer;
    public ?string  $leeftijd;
    public ?string  $tijden;
    public string  $tekst;

    function __construct($naam, $email, $telefoonnummer, $leeftijd, $tijden, $tekst)
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->telefoonnummer = $telefoonnummer;
        $this->leeftijd = $leeftijd;
        $this->tijden = $tijden;
        $this->tekst = $tekst;
    }   
}