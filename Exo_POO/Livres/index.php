<h1>Exercice Livre POO</h1>

<?php

spl_autoload_register(
    function($class_name){
    require ''. $class_name . '.php';
    }
);


$A1    = new Auteur("King", "Stephen");
$L1    = new Livre("Ca", 1138, "1986", 20, $A1);
$L2    = new Livre("Simetierre", 374, "1983", 15, $A1);
$L3    = new Livre("Le Fléau", 823, "1978", 14, $A1);
$L4    = new Livre("Shining", 447, "1977", 16, $A1);

echo $A1->afficherBibliographie();