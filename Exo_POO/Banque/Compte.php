<?php


class Compte
{
    private string $libelle;
    private float $solde_init;
    private string $devise_monetaire;
    private Titulaire $titulaire;
    

    public function __construct(string $libelle, int $solde_init, string $devise_monetaire, Titulaire $titulaire)
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


    public function debiter($val_debit)
    {
        $this->solde_init = $this->solde_init - $val_debit;
        $result = "<br>Le compte est débité de " .$val_debit. " ".$this->devise_monetaire. "<br>";
        return $result;
    }

    public function virement(Compte $compte, float $montant)
    {
        $this->crediter($montant);
        $id->solde_init = $id->solde_init + $montant;
        $result = "Le virement du compte est effectué de <br> $this <br> à <br> $id<br>";
        
    }




    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde_init()
    {
        return $this->solde_init;
    }

    public function setSolde_init($solde_init)
    {
        $this->solde_init = $solde_init;

        return $this;
    }

    public function getDevise_monetaire()
    {
        return $this->devise_monetaire;
    }

    public function setDevise_monetaire($devise_monetaire)
    {
        $this->devise_monetaire = $devise_monetaire;

        return $this;
    }

    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }



    public function __toString()
    {
        return "Compte " .$this->libelle. " de " .$this->titulaire. " avec un solde de " .$this->solde_init. " " .$this->devise_monetaire. "<br>";
    }



}