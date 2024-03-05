<?php


class Genre
{
    private string $genre;
    private array $films_genre;


    public function __construct(string $genre)
    {
        $this->genre            = $genre;
        $this->films_genre      = [];
    }

    public function addFilms_genre(Film $film)
    {
        $this->films_genre[]    = $film;
    }


    public function getGenre():string
    {
        return $this->genre;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getFilms_genre():array
    {
        return $this->films_genre;
    }

    public function setFilms_genre(array $films_genre)
    {
        $this->films_genre = $films_genre;

        return $this;
    }

    public function ListeParGenre()
    {
        $result = "Dans le genre " .$this. " il y a " .count($this->films_genre). " films : " ;
        foreach($this->films_genre as $keys)
        {
            $result .= "( $keys ), ";
        }

        return "<br>$result<br>";
    }

    public function __toString()
    {
        return $this->genre;
    }
}