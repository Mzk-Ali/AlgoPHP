<h1>Exercice 12</h1>

<?php

$tableau = array(
                "Mickael" => "FRA",
                "Virgile" => "ESP",
                "Marie-Claire" => "ENG"
);



foreach($tableau as $cle => $langue){
    if($langue == "FRA"){
        $bonjour = "Salut";
    }
    elseif($langue == "ESP"){
        $bonjour = "Hola";
    }
    else{
        $bonjour = "Hello";
    }

    echo "<lu><li>$bonjour $cle</li><lu>"; /* Pas sur de l'utilisation de balise html sans avoir fermé la balise php */
    echo "<br>";
}

echo "<br>";


// --------------------------Inversion------------------------------
ksort($tableau);
foreach($tableau as $cle => $langue){
    if($langue == "FRA"){
        $bonjour = "Salut";
    }
    elseif($langue == "ESP"){
        $bonjour = "Hola";
    }
    else{
        $bonjour = "Hello";
    }

    echo "<lu><li>$bonjour $cle</li><lu>"; /* Pas sur de l'utilisation de balise html sans avoir fermé la balise php */
    echo "<br>";
}
