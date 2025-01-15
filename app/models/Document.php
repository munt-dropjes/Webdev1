<?php

namespace Models;

class Document
{
    public int $id;
    public string $type;
    public ?string $titel;
    public $document;
    public ?string $editie;
    public ?string $speltak;

    public function __construct(int $id, string $type, ?string $titel, $document, ?string $editie, ?string $speltak)
    {
        $this->id = $id;
        $this->type = $type;
        $this->titel = $titel;
        $this->document = $document;
        $this->editie = $editie;
        $this->speltak = $speltak;
    }

    public function getDocument() : string
    {
        return base64_encode($this->document);
    }
}