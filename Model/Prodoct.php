<?php

class Prodoct{

    protected $name;
    public $prezzo;
    public $img;
    public $descrizione;

    function __construct(string $_name, float $_prezzo, string $_img, string $_descrizione){
        try {
            $this->setName($_name);
        } catch (Exception $e) {
            // se c'è un errore viene stampato in pagina con il valore di exception
            echo 'Errore: ' . $e->getMessage();
        }
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->descrizione = $_descrizione;

    }

    public function setName($_name){
        if(strlen($_name) < 3){
            throw new Exception('Il nome è troppo corto');
        }else{
            $this->name = $_name;
        }
    }
    public function getName(){
        return $this->name;
    }
}