<h1>Exercice 13</h1>

<?php

spl_autoload_register(
    function($class_name){
    require 'classes/'. $class_name . '.php';
    }
);

$v1 = new Voiture("Peugeot", "408", 5, 0);
$v2 = new Voiture("Citroën", "C4", 3, 0);

echo $v1->getInfos();
echo $v2->getInfos();


