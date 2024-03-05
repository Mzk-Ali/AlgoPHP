<h1>POO Cinema</h1>

<?php

spl_autoload_register(
    function($class_name){
    require 'classes/'. $class_name . '.php';
    }
);


$genre_1 = new Genre("Science-fiction");
$genre_2 = new Genre("Aventure");
$genre_3 = new Genre("Action");


$realisateur_1 = new Realisateur("MARZAK", "Ali", "Masculin", "1997-11-30");
$realisateur_2 = new Realisateur("SPIELBERG", "Steven", "Masculin", "1946-12-18");
$realisateur_3 = new Realisateur("EASTWOOD", "Clint", "Masculin", "1930-05-31");


$acteur_1 = new Acteur("Goldblum", "Jeff", "Masculin", "1952-10-22");
$acteur_2 = new Acteur("Dern", "Laura", "Feminin", "1967-02-10");
$acteur_3 = new Acteur("Ford", "Harrison", "Masculin", "1942-07-13");
$acteur_4 = new Acteur("Doody", "Alison", "Feminin", "1966-03-09");
$acteur_5 = new Acteur("Eastwood", "Clint", "Masculin", "1930-05-31");
$acteur_6 = new Acteur("Her", "Ahney", "Feminin", "1993-07-13");
$acteur_7 = new Acteur("Wallach", "Eli", "Masculin", "1915-12-07");
$acteur_8 = new Acteur("Smail", "Stephane", "Masculin", "1985-12-10");


$film_1 = new Film("Ellan Formation", "2023-02-26", 136, $realisateur_1, $genre_2, "Fait une formation sans précèdent");

$film_2 = new Film("Jurassic Park", "1993-10-20", 122, $realisateur_2, $genre_1, "Se font courser par des dinosaures");
$film_3 = new Film("Indiana Jones et la Dernière Croisade", "1989-10-18", 127, $realisateur_2, $genre_2, "Cherche l'aventure et les problèmes");

$film_4 = new Film("Gran Torino", "2009-02-25", 116, $realisateur_3, $genre_3, "Un veteran a des problèmes de voisinage");
$film_5 = new Film("Le Bon la Brute et le truand", "1968-03-08", 180, $realisateur_3, $genre_3, "3 personnes cherchent le trésor");


$role1 = new Role("Indiana Jones");
$role2 = new Role("Maria Jones");
$role3 = new Role("Marc Foul");
$role4 = new Role("Stephanie Foul");
$role5 = new Role("Clint Torino");




$contrat_1 = new Contrat($film_1, $acteur_8, $role1);

$contrat_2 = new Contrat($film_2, $acteur_1, $role3);
$contrat_3 = new Contrat($film_2, $acteur_2, $role4);

$contrat_4 = new Contrat($film_3, $acteur_3, $role1);
$contrat_5 = new Contrat($film_3, $acteur_4, $role2);

$contrat_6 = new Contrat($film_4, $acteur_5, $role5);
$contrat_7 = new Contrat($film_4, $acteur_6, $role2);

$contrat_8 = new Contrat($film_5, $acteur_5, $role1);
$contrat_9 = new Contrat($film_5, $acteur_7, $role5);






echo $role1->ListeActeurs();
echo $film_2->CastingFilm();
echo $genre_3->ListeParGenre();
echo $acteur_5->Filmographie();
echo $realisateur_2->Filmographie();