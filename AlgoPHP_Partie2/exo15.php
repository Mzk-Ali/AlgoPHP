<h1>Exercice 15</h1>

<?php

//$email = "elan@elan-formation.fr";
$email = "contact@elan";

if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "L'adresse ".$email." est une adresse e-mail valide";
}
else
{
    echo "L'adresse ".$email." est une adresse e-mail invalide";
}






