<?php

class Realisateur extends Personne
{
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $date_naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $date_naissance);
        $this->films = [];
    }


    public function addFilm(Film $film)
    {
        $this->films[]        = $film;
    }




    public function getFilms():array
    {
        return $this->films;
    }

    public function setFilms(array $films)
    {
        $this->films = $films;

        return $this;
    }

    public function Filmographie()
    {
        $result = "Le réalisateur ".$this. " a réalisé ".count($this->films). " films : ";
        foreach($this->films as $keys)
        {
            $result .= "( $keys ), ";
        }

        return "<br>$result<br>";
    }
}