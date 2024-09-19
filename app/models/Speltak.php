<?php 

namespace Models;

class Speltak
{
    public string $naam;
    public? string $email;
    public? string  $telefoonnummer;
    public string  $tekst;

    function __construct($naam, $email, $telefoonnummer, $tekst)
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->telefoonnummer = $telefoonnummer;
        $this->tekst = $tekst;
    }   
}