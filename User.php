<?php

class User {
    public $address;

    public $balance = 0;

    protected $prodottiScelti = [];
    // protected $choosenProd = [];

    public function __construct($_address, $_balance) {
        $this->address = $_address;
        $this->balance = $_balance;
    }

    public function getInfo() {
        return "Your address is $this->address, your balance is $this->balance";
    }

    public function aggiungiProdotto($prodotto) {
        $this->prodottiScelti[] = $prodotto;
    }

    public function getProdottiScelti() {
        return $this->prodottiScelti;
    }

    public function calcolaPrezzoTotale() {
        // Facciamo la somma dei prezzi dei prodotti scelti
        $sommaTotale = 0;
        var_dump($sommaTotale);

        foreach($this->prodottiScelti as $prodotto) {
            $sommaTotale += $prodotto->cost;
            var_dump($sommaTotale);
        }

        // Leviamo lo sconto
        var_dump($sommaTotale);

        $sommaTotale -= $sommaTotale * $this->discount / 100;
        var_dump($sommaTotale);

        return $sommaTotale;
    }

    public function effettuaPagamento() {
        $totaleDaPagare = $this->calcolaPrezzoTotale();
        var_dump($totaleDaPagare);

        if($this->balance < $totaleDaPagare) {
            
            die('Saldo non disponibile');
        } else {
            return 'ok';
        }
    }
}
?>