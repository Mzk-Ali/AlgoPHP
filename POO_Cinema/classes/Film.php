<?php

class Film
{
    protected string            $titre;
    protected DateTime          $date_sortie;
    protected int               $duree;
    protected string            $synopsis; //a verifier type
    private Realisateur         $realisateur;
    private array               $contrats;
    private Genre               $genre;


    public function __construct(string $titre, string $date_sortie, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis)
    {
        $this->titre            = $titre;
        $this->date_sortie      = new DateTime($date_sortie);
        $this->duree            = $duree;
        $this->synopsis         = $synopsis;
        $this->realisateur      = $realisateur;
        $this->realisateur->addFilm($this);
        $this->contrats         = [];
        $this->genre            = $genre;
        $this->genre->addFilms_genre($this);
    }


    public function addContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }


    public function getTitre():string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDate_sortie():DateTime
    {
        return $this->date_sortie;
    }

    public function setDate_sortie(string $date_sortie)
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getDuree():int
    {
        return $this->duree;
    }

    public function setDuree(int $duree)
    {
        $this->duree = $duree;

        return $this;
    }

    public function getSynopsis():string 
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getRealisateur():Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur(realisateur $realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getGenre():Genre
    {
        return $this->genre;
    }

    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getContrats():array
    {
        return $this->contrats;
    }

    public function setContrats(array $contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }


    public function CastingFilm()
    {
        $result = "Dans " .$this. " : ";
        foreach($this->contrats as $keys)
        {
            $result .= $keys->getRole()." a été incarné par ".$keys->getActeur(). ", ";
        }

        return "<br>$result<br>";
    }


    public function __toString()
    {
        return $this->titre;
    }
}