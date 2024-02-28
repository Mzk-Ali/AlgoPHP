<h1>Exercice 13</h1>

<?php

$tableau = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$sum_note = 0;

echo "Les notes obtenues par l'élève sont : ";
foreach($tableau as $cle => $note){
    echo "$note ";
    $sum_note = $sum_note + $note;
}

$moyenne = round($sum_note / count($tableau), 2);
echo "<br>";
echo "Sa moyenne générale est donc de : $moyenne";