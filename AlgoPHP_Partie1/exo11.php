<h1>Exercice 11</h1>

<?php

$tableau = ["Peugeot", "Renault", "BMW", "Mercedes",];

for($i = 0; $i < count($tableau); $i++){
    echo "<ul><li>$tableau[$i]</li></ul>"; /* Pas sur de l'utilisation de balise html sans avoir fermé la balise php */
    echo "<br>";
}