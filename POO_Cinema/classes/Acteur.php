<?php

class Acteur extends Personne
{
    private array               $contrats;

    public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $date_naissance);
        $this->contrats         = [];
    }

    public function addContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
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

    public function Filmographie()
    {
        $result = "L'acteur ".parent::__toString(). " a joué dans ".count($this->contrats). " films : ";
        foreach($this->contrats as $keys)
        {
            $result .= "( ".$keys->getFilm()." ), ";
        }

        return "<br>$result<br>";
    }

    public function __toString()
    {
        return parent::__toString();
    }
}