<?php

namespace Models;

class Document
{
    public int $id;
    public string $type;
    public ?string $titel;
    public string $document;
    public ?string $editie;

    public function __construct(int $id, string $type, ?string $titel, string $document, ?string $editie)
    {
        $this->id = $id;
        $this->type = $type;
        $this->titel = $titel;
        $this->document = $document;
        $this->editie = $editie;
    }

    public function getDocument() : string
    {
        return base64_encode($this->document);
    }
}