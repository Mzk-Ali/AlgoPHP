<h1>Exercice 8</h1>

<?php

$nombre = 8;

for ($i=1; $i<=10; $i++){
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat";
    echo "<br>";
}

echo "<br>";

$i = 1;
while ($i <= 10){
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat";
    $i++;
    echo "<br>";
}
