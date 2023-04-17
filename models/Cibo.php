<?php
require_once __DIR__."/Prodotto.php";

class Cibo extends Prodotto{
    private int $peso; //qunatità espressa in grammi
    private array $ingredienti;

    public function __construct(float $prezzo,string $animale,string $nome, int $peso,array $ingredienti){
        parent::__construct($prezzo,$animale,$nome);
        $this->peso=$peso;
        $this->ingredienti=$ingredienti;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getIngredienti(){
        return $this->ingredienti;
    }
}