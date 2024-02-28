<h1>Exercice 7</h1>

<?php

$age = 10;

if ($age >= 6 and $age <= 7){
    $categorie = "la catégorie \" Poussin \"";
}
elseif ($age >= 8 and $age <= 9){
    $categorie = "la catégorie \" Pupille \"";
}
elseif ($age >= 10 and $age <= 11){
    $categorie = "la catégorie \" Minime \"";
}
elseif ($age >= 12){
    $categorie = "la catégorie \" Cadet \"";
}
else{
    $categorie = "aucune catégorie";
}

echo "L'enfant qui a $age ans appartient à $categorie";