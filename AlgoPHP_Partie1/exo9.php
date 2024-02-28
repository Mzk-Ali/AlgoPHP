<h1>Exercice 9</h1>

<?php

$age = 32;
$sexe = "F";

if(($sexe = "F" && $age >= 18 && $age <= 35) || ($sexe = "H" && $age > 20)) {
    echo "La personne est imposable";
}
else{
    echo "La personne n'est pas imposable";
}