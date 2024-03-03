<?php

class Auteur{
    //attributs
    private string      $nom;
    private string      $prenom;
    private array       $livres;


// demarrer, accelerer et stopper

    public function __construct(string $nom, string $prenom)
    {
        $this->nom              = $nom;
        $this->prenom           = $prenom;
        $this->livres           = [];
    }

    public function afficherBibliographie()
    {
        echo "<h2>Livres de ".$this->prenom. " " .$this->nom. "</h2>";
        foreach($this->livres as $keys)
        {
            echo "$keys";
            echo "<br>";
        }
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

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }


    public function addLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }


    public function __toString()
    {
        return $this->nom. " " .$this->prenom;
    }

    public function getInfos()
    {
        
    }
}