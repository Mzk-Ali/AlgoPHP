<h1>Exercice 5</h1>

<?php

$prix_francs = 100;
echo "Montant en francs : $prix_francs";
echo "<br>";
$prix_euros = round($prix_francs / 6.55957, 2);
echo "$prix_francs francs = $prix_euros €";