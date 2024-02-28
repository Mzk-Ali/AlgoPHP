<h1>Exercice 4</h1>

<?php

$phrase = "Engage le jeu que je le gagne";

$string = str_replace(' ', '', $phrase);
$string = strtolower($string);

$inv_string = strrev($string);

if ($string == $inv_string){
    echo "La phrase \"$phrase\" est palindrome";
}
else {
    echo "La phrase \"$phrase\" n'est pas palindrome";
}