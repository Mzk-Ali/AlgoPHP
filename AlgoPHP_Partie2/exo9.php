<h1>Exercice 9</h1>

<?php

$nomsRadio = [  "Monsieur",
                "Madame",
                "Mademoiselle"];

function afficherRadio($tab)
{
    $result = "<fieldset>";
    foreach($tab as $keys)
    {
        $result .= "<input type='radio' id='".$keys."' name='civilite' value='".$keys."'>
                    <label for='".$keys."'>$keys</label>
                    <br>";
    }
    $result .= "</fieldset>";

    return $result;
}

echo afficherRadio($nomsRadio);