<h1>Exercice 9</h1>

<?php

$nomsRadio = [  "Monsieur",
                "Madame",
                "Mademoiselle"];

function afficherRadio($tab)
{
    echo "<fieldset>";
    foreach($tab as $keys)
    {
        echo "<input type='radio' id='".$keys."' name='radio' value='".$keys."'>";
        echo "<label for='".$keys."'>$keys</label>";
        echo "<br>";
    }
    echo "</fieldset>";
}

afficherRadio($nomsRadio);