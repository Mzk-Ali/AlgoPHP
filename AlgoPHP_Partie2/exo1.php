<h1>Exercice 1</h1>

<?php

$texte = "Mon texte en parametre";

function convertirMajRouge($arg){
    $texte_maj = mb_strtoupper($arg);
    return "<p style='color: red;'> $texte_maj </p>";
}

echo convertirMajRouge($texte);