<h1>Exercice 10</h1>

<?php

$nomsInput = [  "Nom",
                "Prenom",
                "Email",
                "Ville",
                "sexe"];


$elements = [   "-- Intitulé de formation --",
                "Développeur Logiciel",
                "Designer web",
                "Intégrateur",
                "Chef de projet"];

// Entree nom prenom email ville sexe
function afficherInput(array $tab)
{
    foreach($tab as $keys)
    {
        echo "<label> $keys </label>";
        echo "<br>";
        echo '<input name="$keys" id="$keys" type="text" />';
        echo "<br>";
    } 
}

function alimenterListeDeroulante(array $tab)
{
    echo "<label> Choose $tab[0] </label>";
    echo "<br>";
    echo "<select>";
    foreach($tab as $keys)
    {
        echo '<option value="'.$keys.'">' .$keys. '</option>';
        echo "<br>";
    }
    echo "</select>";
}

afficherInput($nomsInput);
alimenterListeDeroulante($elements);
