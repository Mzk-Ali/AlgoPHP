<h1>Exercice 8</h1>

<?php


$url = "https://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($lien, $times)
{  
    $string = "<img src='$lien'/>";
    echo str_repeat($string, $times);
}
//echo str_repeat($url, 4);
repeterImage($url, 4);



//<img src='$lien'/>