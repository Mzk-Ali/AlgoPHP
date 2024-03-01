<h1>Exercice 12</h1>

<?php

$tableau = array(
                "Mickael" => "FRA",
                "Virgile" => "ESP",
                "Marie-Claire" => "ITA"
);

$tab_lang = [   "FRA" => "Salut",
                "ESP" => "Hola",
                "ENG" => "Hello"]; 



echo "<ul>";
foreach($tableau as $cle => $langue){
    $bonjour = $tab_lang[$langue];

    echo "<li>$bonjour $cle</li>"; /* Pas sur de l'utilisation de balise html sans avoir fermé la balise php */
}
echo "</ul>";

echo "<br>";


// --------------------------Inversion------------------------------
ksort($tableau);
echo "<ul>";
foreach($tableau as $cle => $langue){
    $bonjour = $tab_lang[$langue];

    echo "<li>$bonjour $cle</li>"; /* Pas sur de l'utilisation de balise html sans avoir fermé la balise php */
}
echo "</ul>";
