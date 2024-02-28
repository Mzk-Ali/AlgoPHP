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

while($reste != 0){
    if($reste >= 10){
        $nbr_billet_10e = intdiv($reste,10);
        $reste = $reste - ($nbr_billet_10e * 10);
    }
    elseif($reste >= 5){
        $nbr_billet_5e = intdiv($reste,5);
        $reste = $reste - ($nbr_billet_5e * 5);
    }
    elseif($reste >= 2){
        $nbr_piece_2e = intdiv($reste,2);
        $reste = $reste - ($nbr_piece_2e * 2);
    }
    elseif($reste >= 1){
        $nbr_piece_1e = intdiv($reste,1);
        $reste = $reste - ($nbr_piece_1e * 1);
    }
}


echo "$nbr_billet_10e billets de 10 € - $nbr_billet_5e billets de 5 € - $nbr_piece_2e piece de 2 € - $nbr_piece_1e piece de 1 €";