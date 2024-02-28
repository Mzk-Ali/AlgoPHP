<h1>Exercice 6</h1>

<?php

$prix_unit = "9.99";
$quantite = "5";
$taux_TVA = "0.2";
echo "Prix unitaire de l'article : $prix_unit";
echo "<br>";
echo "Quantité : $quantite";
echo "<br>";
echo "Taux de TVA : $taux_TVA";
echo "<br>";
$prix_euros = round($prix_francs / 6.55957, 2);
echo "$prix_francs francs = $prix_euros €";