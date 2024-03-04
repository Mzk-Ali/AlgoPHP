<h1>Exercice 13</h1>

<?php

spl_autoload_register(
    function($class_name){
    require 'classes/exo13/'. $class_name . '.php';
    }
);

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo $v1->getInfos();
echo $v2->getInfos();


echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v1->ralentir(100);
echo $v1->getVitesseActuelle();
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();

echo $v1->getInfos();
echo $v2->getInfos();



