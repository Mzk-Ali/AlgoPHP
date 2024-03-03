<h1>Exercice 14</h1>

<?php

spl_autoload_register(
    function($class_name){
    require 'classes/exo14/'. $class_name . '.php';
    }
);


$v1     = new Voiture("Peugeot", "408");
$ve1    = new VoitureElec("BMW","I3", 100);


echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

