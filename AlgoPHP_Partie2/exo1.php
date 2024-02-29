<h1>Exercice 1</h1>

<?php

$texte = "Mon texte en parametre";

function convertirMajRouge($arg){
    $texte_maj = strtoupper($arg);
    echo "<p style='color: red;'> $texte_maj </p>";
}

convertirMajRouge($texte);