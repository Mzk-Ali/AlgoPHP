<h1>Exercice 3</h1>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracters = strlen($phrase);
echo "La phrase \"$phrase\" contient $nbCaracters caractères.";

echo "<br>";

$phrase = str_replace("aujourd'hui", "demain", $phrase);
$nbCaracters = strlen($phrase);
echo "La phrase \"$phrase\" contient $nbCaracters caractères.";