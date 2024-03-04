<h1>Exercice 5</h1>

<?php

$nomsInput = [  "Nom",
                "Prenom",
                "Ville"];

function afficherInput(array $tab)
{
    $result ="";
    foreach($tab as $keys) // for = permet de selectionner quand on touche le label
    {
        $result .= "<label for='$keys'> $keys </label>
                    <br>
                    <input name='$keys' id='$keys' type='text'/>
                    <br>";
    } 
    return $result;
}

echo afficherInput($nomsInput);