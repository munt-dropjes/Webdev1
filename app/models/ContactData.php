<?php

namespace Models;

class ContactData
{
    public int $id;
    public string $speltak;
    public string $functie;
    public string $naam;
    public string $email;
    public string $telefoonnummer;

    function __construct($id, $speltak, $functie, $naam, $email, $telefoonnummer)
    {
        $this->id = $id;
        $this->speltak = $speltak;
        $this->functie = $functie;
        $this->naam = $naam;
        $this->email = $email;
        $this->telefoonnummer = $telefoonnummer;
    }
}