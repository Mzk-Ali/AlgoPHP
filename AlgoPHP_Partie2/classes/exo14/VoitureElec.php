<?php



class VoitureElec extends Voiture{
    //attributs
    private int      $autonomie;

// demarrer, accelerer et stopper

    public function __construct(string $marque, string $modele, int $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }


    public function getAutonomie():int
    {
        return $this->autonomie;
    }

    public function setAutonomie(int $autonomie)
    {
        $this->autonomie = $autonomie;

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
        echo "Nom, modèle du Véhicule et autonomie : " .$this->marque." " .$this->modele. " ".$this->autonomie;
        echo "<br>";
        echo "<br>";
    }

}