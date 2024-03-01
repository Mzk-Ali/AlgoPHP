<h1>Exercice 7</h1>

<?php

$elements = [   "Choix 1"=>"checked",
                "Choix 2"=>"0",
                "Choix 3"=>"checked"];

function genererCheckbox($tab)
{
    echo "<form>";
    foreach($tab as $keys => $value)
    {
        echo "<input type='checkbox' id='".$keys."' name='interest' value='".$keys."' $value >";
        echo "<label for='".$keys."'>$keys</label>";
        echo "<br>";
    }
    echo "</form>";
}

genererCheckbox($elements);