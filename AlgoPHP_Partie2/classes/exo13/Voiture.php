<?php

class Voiture {
    //attributs
    private string      $marque;
    private string      $modele;
    private int         $nbPortes;
    private int         $VitesseActuelle;
    private string      $statut = "à l'arrêt";

// demarrer, accelerer et stopper

    public function __construct(string $marque, string $modele, int $nbPortes)
    {
        $this->marque           = $marque;
        $this->modele           = $modele;
        $this->nbPortes         = $nbPortes;
        $this->VitesseActuelle  = 0;
    }

    public function demarrer()
    {
        if($this->statut = "à l'arrêt")
        {
            $this->statut = "démarré";
            $result = "Le véhicule $this démarre <br>";
        }
        else
        {
            $result = "Le véhicule $this est déja démarré <br>";
        }

        return $result;

    }

    public function accelerer($vitesse)
    {
        if($this->statut == "démarré")
        {
            $this->VitesseActuelle = +$vitesse;
            $result = "Le véhicule $this accélère de" .$vitesse. "<br>";
        }
        else
        {
            $result = "Le véhicule $this veut accélerer de " .$vitesse. "<br>";
            $result .= "Pour accélerer, il faut démarrer le véhicule $this <br>";
        }
        return $result;
    }

    public function ralentir($vitesse)
    {
        if($this->statut == "démarré" && $this->VitesseActuelle > 0)
        {
            if($vitesse < $this->VitesseActuelle)
            {
                $this->VitesseActuelle = -$vitesse;
                $result = "Le véhicule $this ralentit de " .$vitesse."<br>";
            }
            else
            {
                $result = "Le véhicule $this ralentit de " .$this->VitesseActuelle. "<br>";
                $this->VitesseActuelle = 0;
            }

        }
        else
        {
            $result = "Le véhicule $this veut ralentir de " .$vitesse."<br>";
            $result .= "Pour ralentir, il faut que le véhicule $this soit en mouvement<br>";
        }
        return $result;
    }

    public function stopper()
    {
        if($this->statut = "démarré")
        {
            $this->statut = "à l'arrêt";
            $this->VitesseActuelle = 0;
            $result = "Le véhicule $this est stoppé <br>";
        }
        else
        {
            $result = "Le véhicule $this est déjà à l'arrêt <br>";
        }
        return $result;
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

    public function getNbPortes():int
    {
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle(): string
    {
        $result = "La vitesse du véhicule ".$this. " est de : " .$this->VitesseActuelle. " km / h <br>";
        return $result;
    }

    public function setVitesseActuelle(int $VitesseActuelle)
    {
        $this->VitesseActuelle = $VitesseActuelle;

        return $this;
    }

    public function __toString()
    {
        return $this->marque. " " .$this->modele;
    }

    public function getInfos()
    {
        $result = "<br>Infos Vehicule<br>*****************<br>";
        $result .= "Nom et modèle du Véhicule : " .$this."<br>";
        $result .= "Nombre de portes : " .$this->nbPortes."<br>";
        $result .= "Le véhicule est " .$this->statut."<br>";
        $result .= "Sa vitesse actuelle est de : " .$this->VitesseActuelle."<br><br>";

        return $result;
    }

}