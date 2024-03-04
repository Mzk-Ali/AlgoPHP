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
        $string = parent::__toString();
        return $string;
    }

    public function getInfos()
    {
        $result = "<br>Infos Vehicule<br>*****************<br>";
        $result = "Nom, modèle du Véhicule et autonomie : " .$this. " ".$this->autonomie. "<br><br>";
        return $result;
    }

}