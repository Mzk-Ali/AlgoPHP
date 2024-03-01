<h1>Exercice 6</h1>

<?php

$elements = [   "Monsieur",
                "Madame",
                "Mademoiselle"];

function alimenterListeDeroulante(array $tab)
{
    echo "<select>";
    foreach($tab as $keys)
    {
        echo '<option value="'.$keys.'">' .$keys. '</option>';
        echo "<br>";
    }
    echo "</select>";
}

alimenterListeDeroulante($elements);