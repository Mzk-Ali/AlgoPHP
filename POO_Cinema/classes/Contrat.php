<?php


class Contrat
{
    private Film        $film;
    private Acteur      $acteur;
    private Role        $role;


    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->film     = $film;
        $this->acteur   = $acteur;
        $this->role     = $role;
        $this->film->addContrat($this);
        $this->acteur->addContrat($this);
        $this->role->addContrat($this);
    }


    public function getFilm():Film
    {
        return $this->film;
    }

    public function setFilm(Film $film)
    {
        $this->film = $film;

        return $this;
    }

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    public function __toString()
    {
        return "<br>Contrat du film (".$this->film. " avec l'acteur ".$this->acteur. " pour le rôle de " .$this->role. "<br>"; 
    }
}