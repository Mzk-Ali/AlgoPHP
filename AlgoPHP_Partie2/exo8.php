<h1>Exercice 8</h1>

<?php


$url = "https://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($lien, $times)
{  
    for($i = 0; $i < $times; $i++)
    {
        $string .= "<img src='$lien'/>";
    }
    return $string;
}
echo repeterImage($url, 4);



//<img src='$lien'/>