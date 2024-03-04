<h1>Exercice 7</h1>

<?php

$elements = [   "Choix 1"=>"checked",
                "Choix 2"=>"",
                "Choix 3"=>"checked"];

function genererCheckbox($tab)
{
    $result = "<form>";
    foreach($tab as $keys => $value)
    {
        $result .= "<input type='checkbox' id='".$keys."' name='interest' value='".$keys."' $value >
                    <label for='".$keys."'>$keys</label><br>";
    }
    $result .= "</form>";

    return $result;
}

echo genererCheckbox($elements);