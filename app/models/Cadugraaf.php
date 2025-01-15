<?php

namespace Models;

class Cadugraaf{
    public int $editie;
    public string $document;
    public ?string $voorpagina;

    public function __construct(int $editie, string $document, ?string $voorpagina){
        $this->editie = $editie;
        $this->document = $document;
        $this->voorpagina = $voorpagina;
    }
}