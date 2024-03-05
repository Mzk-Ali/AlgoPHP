<?php

class Personne
{
    protected string            $nom;
    protected string            $prenom;
    protected string            $sexe;
    protected DateTime          $date_naissance;


    public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
    {
        $this->nom              = $nom;
        $this->prenom           = $prenom;
        $this->sexe             = $sexe;
        $this->date_naissance   = new DateTime($date_naissance);
    }


    public function getNom():string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe():string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDate_naissance():DateTime
    {
        return $this->date_naissance;
    }

    public function setDate_naissance(string $date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }


    



    public function __toString()
    {
        return $this->prenom. " " .$this->nom;
    }
}