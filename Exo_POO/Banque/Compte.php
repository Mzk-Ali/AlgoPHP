<?php


class Compte
{
    private string $libelle;
    private int $solde_init;
    private string $devise_monetaire;
    private Titulaire $titulaire
    

    public function __construct(string $libelle, int $solde_init, string $devise_monetaire, Titulaire $titulaire)
    {
        $this->libelle          = $libelle;
        $this->solde_init       = $solde_init;
        $this->devise_monetaire = $devise_monetaire;
        $this->titulaire        = $titulaire;
        $this->titulaire->addCompte($this);
    }


    public function getLibelle()
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

    public function getTitulaire()
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
        return $this->libelle;
    }



}