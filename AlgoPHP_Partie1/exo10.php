<h1>Exercice 10</h1>

<?php

$mont_a_payer = 152;
$mont_verse = 200;

$reste = $mont_verse - $mont_a_payer;

$nbr_piece_1e = 0;
$nbr_piece_2e = 0;
$nbr_billet_5e = 0;
$nbr_billet_10e = 0;

echo "Montant à payer : $mont_a_payer €";
echo "<br>";
echo "Montant versé : $mont_verse €";
echo "<br>";
echo "Reste à payer : $reste €";
echo "<br>";
echo "********************************************";
echo "<br>";
echo "Rendue de monnaie :";
echo "<br>";



$nbr_billet_10e = intdiv($reste,10);
$modulo = $reste % 10;
$nbr_billet_5e = intdiv($modulo,5);
$modulo = $modulo % 5;
$nbr_piece_2e = intdiv($modulo,2);
$modulo = $modulo % 2;
$nbr_piece_1e = intdiv($modulo,1);
$modulo = $modulo % 1;



echo "$nbr_billet_10e billets de 10 € - $nbr_billet_5e billets de 5 € - $nbr_piece_2e piece de 2 € - $nbr_piece_1e piece de 1 €";