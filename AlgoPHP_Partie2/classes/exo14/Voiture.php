<?php

class Voiture {
    //attributs
    protected string      $marque;
    protected string      $modele;

// demarrer, accelerer et stopper

    public function __construct(string $marque, string $modele)
    {
        $this->marque           = $marque;
        $this->modele           = $modele;
    }


    public function getMarque():string
    {
        return $this->marque;
    }

    public function setMarque(string $marque)
    {
        $this->marque = $marque;

        return $this;
    }


    public function getModele():string
    {
        return $this->modele;
    }

    public function setModele(string $modele)
    {
        $this->modele = $modele;

        return $this;
    }


    public function __toString()
    {
        return $this->marque. " " .$this->modele;
    }

    public function getInfos()
    {
        
        $result = "<br>Infos Vehicule<br>*****************<br>";
        $result = "Nom et modèle du Véhicule : " .$this. "<br>";
        return $result;
    }

}