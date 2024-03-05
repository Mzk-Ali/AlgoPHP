<?php


class Role
{
    private string      $nom_personnage;
    private array       $contrats;


    public function __construct(string $nom_personnage)
    {
        $this->nom_personnage = $nom_personnage;
        $this->contrats       = [];
    }

    public function addContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }


    public function getNom_personnage():string
    {
        return $this->nom_personnage;
    }

    public function setNom_personnage(string $nom_personnage)
    {
        $this->nom_personnage = $nom_personnage;

        return $this;
    }

    public function getContrats():array
    {
        return $this->contrats;
    }

    public function setContrats(array $contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

    public function ListeActeurs()
    {
        $result = "Les acteurs ayant incarné le rôle de ".$this." sont : ";
        foreach($this->contrats as $keys)
        {
            $result .= "( ".$keys->getActeur()." ), ";
        }

        return "<br>$result<br>";
    }


    public function __toString()
    {
        return $this->nom_personnage;
    }
}