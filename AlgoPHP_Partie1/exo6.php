<h1>Exercice 6</h1>

<?php

$prix_unit = 9.99;
$quantite = 5;
$taux_TVA = 0.2;
echo "Prix unitaire de l'article : $prix_unit";
echo "<br>";
echo "Quantité : $quantite";
echo "<br>";
echo "Taux de TVA : $taux_TVA";
echo "<br>";

$tva = bcmul($quantite, $taux_TVA, 2);
$montant = round($prix_unit * ($quantite + $tva), 2);
echo "Le montant de la facture à régler est de : $montant";