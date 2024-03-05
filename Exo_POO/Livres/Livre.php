<?php

class Livre{
    //attributs
    private string      $titre;
    private int         $nbr_pages;
    private DateTime    $date_parution;
    private int         $prix;
    private Auteur      $auteur;


// demarrer, accelerer et stopper

    public function __construct(string $titre, int $nbr_pages, string $date_parution, int $prix, Auteur $auteur)
    {
        $this->titre           = $titre;
        $this->nbr_pages       = $nbr_pages;
        $this->date_parution   = new DateTime($date_parution);
        $this->prix            = $prix;
        $this->auteur          = $auteur;
        $this->auteur->addLivre($this);
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

    public function getNbr_pages():int
    {
        return $this->nbr_pages;
    }

    public function setNbr_pages(int $nbr_pages)
    {
        $this->nbr_pages = $nbr_pages;

        return $this;
    }

    public function getDate_parution():DateTime
    {
        return $this->date_parution;
    }

    public function setDate_parution(string $date_parution)
    {
        $this->date_parution = $date_parution;

        return $this;
    }

    public function getPrix():int
    {
        return $this->prix;
    }

    public function setPrix(int $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur():Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }


    public function __toString()
    {
        return $this->titre. " (".$this->date_parution->format('Y').") : " .$this->nbr_pages. " pages / " .$this->prix. " €";
    }

    public function getInfos()
    {
        
    }
}