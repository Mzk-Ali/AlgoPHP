<?php

class Voiture {
    //attributs
    private string      $marque;
    private string      $modele;
    private int         $nbPortes;
    private int         $VitesseActuelle = 0;
    private int         $statut = 0;

// demarrer, accelerer et stopper

    public function __construct(string $marque, string $modele, int $nbPortes, int $VitesseActuelle)
    {
        $this->marque           = $marque;
        $this->modele           = $modele;
        $this->nbPortes         = $nbPortes;
        $this->VitesseActuelle  = $VitesseActuelle;
    }

    public function demarrer()
    {
        $this->statut = 1;
        echo "Le véhicule $marque $modele démarre";
    }

    public function accelerer($vitesse)
    {
        if($this->statut)
        {
            $this->VitesseActuelle = ++$vitesse;
            echo "Le véhicule $marque $modele accélère de " $vitesse;
        }
        else
        {
            echo "Le véhicule $marque $modele veut accélerer de " $vitesse";
        }
    }

    public function stopper()
    {
        $this->statut = 0; 
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

    public function getNbPortes():string
    {
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle():string
    {
        return $this->VitesseActuelle;
    }

    public function setVitesseActuelle(int $VitesseActuelle)
    {
        $this->VitesseActuelle = $VitesseActuelle;

        return $this;
    }

    public function __toString()
    {

    }

    public function getInfos()
    {
        echo "Infos Vehicule";
        echo "<br>";
        echo "*****************";
        echo "<br>";
        echo "Nom et modèle du Véhicule : " .$this->marque. " " .$this->modele;
        echo "<br>";
        echo "Nombre de portes : " .$this->nbPortes;
        echo "<br>";
        echo "Le véhicule est" ;
        echo "<br>";
        echo "Sa vitesse actuelle est de : " .$this->VitesseActuelle;
        echo "<br>";
        echo "<br>";
    }

}