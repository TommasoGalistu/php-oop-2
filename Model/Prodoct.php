<?php

class Prodoct{

    public $name;
    public $prezzo;
    public $img;
    public $descrizione;

    function __construct(string $_name, float $_prezzo, string $_img, string $_descrizione){
        $this->name = $_name;
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->descrizione = $_descrizione;

    }
}