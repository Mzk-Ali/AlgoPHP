<h1>Exercice 14</h1>

<?php

$date_courante = "21-05-2018";
$date_naissance = "17-01-1985";

$diff = date_diff(date_create($date_naissance), date_create($date_courante));

echo 'Age de la personne : ' .$diff->format('%y ans %m mois %d jours');

