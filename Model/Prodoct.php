<?php

class Prodoct{

    protected $name;
    public $prezzo;
    public $img;
    public $descrizione;

    function __construct(string $_name, float $_prezzo, string $_img, string $_descrizione){
        $this->setName($_name);
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->descrizione = $_descrizione;

    }

    public function setName($_name){
        
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
}