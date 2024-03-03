<?php

class Voiture {
    //attributs
    private string      $marque;
    private string      $modele;
    private int         $nbPortes;
    private int         $VitesseActuelle = 0;
    private string      $statut = "à l'arrêt";

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
        $this->statut = "démarré";
        echo "Le véhicule $this->marque $this->modele démarre";
        echo "<br>";
    }

    public function accelerer($vitesse)
    {
        if($this->statut == "démarré")
        {
            $this->VitesseActuelle = +$vitesse;
            echo "Le véhicule $this->marque $this->modele accélère de " .$vitesse;
            echo "<br>";
        }
        else
        {
            echo "Le véhicule $this->marque $this->modele veut accélerer de " .$vitesse;
            echo "<br>";
            echo "Pour accélerer, il faut démarrer le véhicule $this->marque $this->modele";
            echo "<br>";
        }
    }

    public function ralentir($vitesse)
    {
        if($this->statut == "démarré" && $this->VitesseActuelle != 0)
        {
            $this->VitesseActuelle = -$vitesse;
            echo "Le véhicule $this->marque $this->modele ralentit de " .$vitesse;
            echo "<br>";
        }
        else
        {
            echo "Le véhicule $this->marque $this->modele veut ralentir de " .$vitesse;
            echo "<br>";
            echo "Pour ralentir, il faut que le véhicule $this->marque $this->modele soit en mouvement";
            echo "<br>";
        }
    }

    public function stopper()
    {
        $this->statut = "à l'arrêt";
        $this->VitesseActuelle = 0;
        echo "Le véhicule $this->marque $this->modele est stoppé";
        echo "<br>";
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

    public function getVitesseActuelle()
    {
        echo "La vitesse du véhicule ".$this->marque. " " .$this->modele. " est de : " .$this->VitesseActuelle. " km / h";
        echo "<br>";
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
        echo "<br>";
        echo "Infos Vehicule";
        echo "<br>";
        echo "*****************";
        echo "<br>";
        echo "Nom et modèle du Véhicule : " .$this->marque. " " .$this->modele;
        echo "<br>";
        echo "Nombre de portes : " .$this->nbPortes;
        echo "<br>";
        echo "Le véhicule est " .$this->statut;
        echo "<br>";
        echo "Sa vitesse actuelle est de : " .$this->VitesseActuelle;
        echo "<br>";
        echo "<br>";
    }

}