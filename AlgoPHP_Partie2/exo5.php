<h1>Exercice 5</h1>

<?php

$nomsInput = [  "Nom",
                "Prenom",
                "Ville"];

function afficherInput(array $tab)
{
    foreach($tab as $keys)
    {
        echo "<label> $keys </label>";
        echo "<br>";
        echo '<input name="$keys" id="$keys" type="text" />';
        echo "<br>";
    } 
}

afficherInput($nomsInput);