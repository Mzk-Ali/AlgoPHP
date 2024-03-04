<h1>Exercice 6</h1>

<?php

$elements = [   "Monsieur",
                "Madame",
                "Mademoiselle"];

function alimenterListeDeroulante(array $tab)
{
    $result = "<select name='civilite' id='civilite>";
    foreach($tab as $keys)
    {
        $result .= "<option value='$keys'> $keys</option><br>";
    }
    $result .= "</select>";

    return $result;
}

echo alimenterListeDeroulante($elements);