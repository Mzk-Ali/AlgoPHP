<h1>Exercice Banque POO</h1>

<?php

spl_autoload_register(
    function($class_name){
    require ''. $class_name . '.php';
    }
);


$A = new Titulaire("Marzak", "Ali", "1997-11-30", "Strasbourg");
$B = new Titulaire("Ndiaye", "Nathan", "1996-10-28", "Paris");


$C_A1 = new Compte("Livret A", 2000, "Euro", $A);
$C_A2 = new Compte("Courant 1", 1500, "Euro", $A);

$C_B1= new Compte("Courant", 5400, "Euro", $B);


echo $C_A2;
echo $C_A2->crediter(100);
echo $C_A2;
echo $C_A2->debiter(600);
echo $C_A2;
echo $C_B1;
echo $C_A2->virement($C_B1, 600);
echo $C_A2;
echo $C_B1;

$A->getInfos();