<?php

namespace Models;

class User{
    public string $id;
    public string $name;
    public string $email;
    public string $password;
    public string $role;
    // public ?string $token;

    // // voor de foto's, zodat je alleen fotos laat zien van eigen jaren
    // // voor archief alleen start; eind is null
    // public ?string welpenStart;
    // public ?string welpenEind;
    // public ?string helpGidsStart;
    // public ?string helpGidsEind;
    // public ?string verkennersStart;
    // public ?string verkennersEind;
    // public ?string kaderStart;
    // public ?string kaderEind;
    // public ?string rowansStart;
    // public ?string rowansEind;
    // public ?string leidingStart;
    // public ?string leidingEind;
    // public ?string stafStart;
    // public ?string stafEind;
    // public ?string stamStart;
    // public ?string stamEind;

    public function __construct(string $id = "", string $name = "", string $email = "", string $password = "", string $role = ""){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}