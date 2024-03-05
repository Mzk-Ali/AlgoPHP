<?php


class Compte
{
    private string $libelle;
    private float $solde_init;
    private string $devise_monetaire;
    private Titulaire $titulaire;
    

    public function __construct(string $libelle, float $solde_init, string $devise_monetaire, Titulaire $titulaire)
    {
        $this->libelle          = $libelle;
        $this->solde_init       = $solde_init;
        $this->devise_monetaire = $devise_monetaire;
        $this->titulaire        = $titulaire;
        $this->titulaire->addCompte($this);
    }


    public function crediter(float $val_credit)
    {
        $this->solde_init = $this->solde_init + $val_credit;
        $result = "<br>Le compte est crédité de " .$val_credit. " ".$this->devise_monetaire. "<br>";
        return $result;
    }


    public function debiter(float $val_debit)
    {
        $this->solde_init = $this->solde_init - $val_debit;
        $result = "<br>Le compte est débité de " .$val_debit. " ".$this->devise_monetaire. "<br>";
        return $result;
    }

    public function virement(Compte $compte, float $montant)
    {
        $this->crediter($montant);
        $compte->solde_init = $compte->solde_init + $montant;
        $result = "Le virement du compte est effectué de <br> $this <br> à <br> $compte<br>";
        
    }




    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde_init():float
    {
        return $this->solde_init;
    }

    public function setSolde_init(float $solde_init)
    {
        $this->solde_init = $solde_init;

        return $this;
    }

    public function getDevise_monetaire():string
    {
        return $this->devise_monetaire;
    }

    public function setDevise_monetaire(string $devise_monetaire)
    {
        $this->devise_monetaire = $devise_monetaire;

        return $this;
    }

    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire(Titulaire $titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }



    public function __toString()
    {
        return "Compte " .$this->libelle. " de " .$this->titulaire. " avec un solde de " .$this->solde_init. " " .$this->devise_monetaire. "<br>";
    }



}