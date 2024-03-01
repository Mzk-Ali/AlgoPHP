<h1>Exercice 15</h1>

<?php

spl_autoload_register(
    function($class_name){
    require 'classes/'. $class_name . '.php';
    }
);

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->info();
echo "<br>";
echo $p2->info();

echo $p1;

