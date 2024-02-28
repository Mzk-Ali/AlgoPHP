<h1>Exercice 15</h1>

<?php

class Personne {
    private $nom;
    private $prenom;
    private $date_naissance;

    public function getName()
    {
        //return $this->nom;
        //return $this->prenom;
        echo "$this->prenom $this->nom a $this->date_naissance";
    }

    public function __construct(string $nom, string $prenom, string $date_naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");



echo $p1->getName();

