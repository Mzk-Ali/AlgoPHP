<h1>Exercice 7</h1>

<?php

$age = 10;

if ($age >= 12){
    $categorie = "la catégorie \" Cadet \"";
}
elseif ($age >= 10){
    $categorie = "la catégorie \" Minime \"";
}
elseif ($age >= 8){
    $categorie = "la catégorie \" Pupille \"";
}
elseif ($age >= 6){
    $categorie = "la catégorie \" Poussin \"";
}
else{
    $categorie = "aucune catégorie";
}

echo "L'enfant qui a $age ans appartient à $categorie";