<h1>Exercice 11</h1>

<?php

$date = "2018-02-23";

function formaterDateFr($date)
{
    $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
    $fmt->setPattern('EEEE dd MMMM YYYY');
    echo $fmt->format(new DateTime($date));   // jeudi 20 février 2020
}


formaterDateFr($date);
