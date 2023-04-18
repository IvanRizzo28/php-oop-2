<?php
require_once __DIR__."/../trait/Nome.php";

class Prodotto{

    use Nome;
    private float $prezzo;
    private string $animale;

    public function __construct(float $prezzo,string $animale,string $nome){
        $this->setPrezzo($prezzo);
        $this->animale=$animale;
        $this->nome=$nome;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getAnimale(){
        return $this->animale;
    }

    public function setPrezzo($prezzo){
        if ($prezzo<0){
            $this->prezzo=0;
            throw new Exception("Il prezzo deve essere maggiore o uguale a zero");
        } 
        $this->prezzo=$prezzo;
    }

}