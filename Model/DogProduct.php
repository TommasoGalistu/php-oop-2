<?php

class DogProduct extends Prodoct{
    public $categoria;

    public function __construct(string $_name, float $_prezzo, string $_img, string $_descrizione){

        parent::__construct( $_name,  $_prezzo,  $_img,  $_descrizione);

        $this->categoria;
    }


}