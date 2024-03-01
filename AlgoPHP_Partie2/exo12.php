<h1>Exercice 12</h1>

<?php

$tableauValeurs = array(true, "texte", 10, 25.369, array("Valeur1", "Valeur2"));

foreach($tableauValeurs as $keys)
{
    var_dump($keys);
    echo "<br>";
}
