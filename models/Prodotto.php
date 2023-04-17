<?php

class Prodotto{

    private float $prezzo;
    private string $animale;
    private string $nome;

    public function __construct(float $prezzo,string $animale,string $nome){
        $this->prezzo=$prezzo;
        $this->animale=$animale;
        $this->nome=$nome;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getAnimale(){
        return $this->animale;
    }

    public function getNome(){
        return $this->nome;
    }

}