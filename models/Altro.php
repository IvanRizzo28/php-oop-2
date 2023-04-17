<?php

class Altro extends Prodotto{

    private string $materiale;
    private string $dimensioni;

    public function __construct(float $prezzo,string $animale,string $nome, string $materiale,string $dimensioni){
        parent::__construct($prezzo,$animale,$nome);
        $this->materiale=$materiale;
        $this->dimensioni=$dimensioni;
    }

    public function getMateriale(){
        return $this->materiale;
    }

    public function getDimensioni(){
        return $this->dimensioni;
    }

}