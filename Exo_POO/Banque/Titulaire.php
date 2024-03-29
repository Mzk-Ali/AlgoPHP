<?php


class Titulaire
{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private string $ville;
    private array $comptes;



    public function __construct(string $nom, string $prenom, string $date_naissance, string $ville)
    {
        $this->nom              = $nom;
        $this->prenom           = $prenom;
        $this->date_naissance   = new DateTime($date_naissance);
        $this->ville            = $ville;
        $this->comptes          = [];
    }

    public function addCompte(Compte $compte)
    {
        $this->comptes[]        = $compte;
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

    public function getDate_naissance():DateTime
    {
        return $this->date_naissance;
    }

    public function setDate_naissance(string $date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getVille():string
    {
        return $this->ville;
    }

    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getComptes(): array
    {
        return $this->comptes;
    }

    public function setComptes(array $comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }


    public function getInfos()
    {
        $fus_h  = new DateTimeZone('Europe/Paris');
        $age = $this->date_naissance ->diff(new DateTime('now', $fus_h))  -> y;
        $result = "<h2>Compte de " .$this." (" .$age." ans)</h2>";
        foreach($this->comptes as $keys)
        {
            $result .= $keys. "<br>";
        }
        return $result;
    }


    public function __toString()
    {
        return $this->nom. " " .$this->prenom;
    }
}