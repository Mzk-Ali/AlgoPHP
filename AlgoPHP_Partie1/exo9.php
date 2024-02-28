<h1>Exercice 9</h1>

<?php

$age = 32;
$sexe = "F";

if(($sexe = "F" and $age >= 18 and $age <= 35) or ($sexe = "H" and $age > 20)) {
    echo "La personne est imposable";
}
else{
    echo "La personne n'est pas imposable";
}