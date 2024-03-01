<?php

class Personne {
    //attributs
    private string      $nom;
    private string      $prenom;
    private Datetime    $date_naissance;

    public function __construct(string $nom, string $prenom, string $date_naissance)
    {
        $this->nom              = $nom;
        $this->prenom           = $prenom;
        $this->date_naissance   = new DateTime($date_naissance);
    }

    public function info()
    {
        $fus_h  = new DateTimeZone('Europe/Paris');
        $age = $this->date_naissance ->diff(new DateTime('now', $fus_h))  -> y;

        $info = $this." a " .$age. " ans";
        return $info;
    }
  
    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDate_naissance(): DateTime
    {
        return $this->date_naissance;
    }

    public function setDate_naissance(string $date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function __toString() {
        return "$this->prenom $this->nom";
    }
}