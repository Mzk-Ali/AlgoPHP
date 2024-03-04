<h1>Exercice 10</h1>

<?php

$nomsInput = [  "Nom",
                "Prenom",
                "Email",
                "Ville"];

$sexe = [   "Masculin",
            "Feminin"];

$elements = [   "-- Intitulé de formation --",
                "Développeur Logiciel",
                "Designer web",
                "Intégrateur",
                "Chef de projet"];

// Entree nom prenom email ville sexe
function afficherInput(array $tab)
{
    $result = "";
    foreach($tab as $keys)
    {
        $result .= "<label for= '$keys'> $keys </label>
                    <br>
                    <input name='$keys' id='$keys' type='text' />
                    <br>";
    }
    return $result;
}

function afficherRadio($tab)
{
    $result = "<label> Sexe </label><br>";
    foreach($tab as $keys)
    {
        $result .= "<input type='radio' id='".$keys."' name='civilite' value='".$keys."'>
                    <label for='".$keys."'>$keys</label>
                    <br>";
    }
    //$result .= "</fieldset>";

    return $result;
}

function alimenterListeDeroulante(array $tab)
{
    $result = "<label> Choose $tab[0] </label>
                <br>
                <select>";
    foreach($tab as $keys)
    {
        $result .= "<option value='$keys'> $keys </option>;
                    <br>";
    }
    $result .= "</select>";
    return $result;
}

function affichageFormulaire($nomsInput, $sexe, $elements)
{
    $result = "";
    $result .= afficherInput($nomsInput);
    $result .= afficherRadio($sexe);
    $result .= alimenterListeDeroulante($elements);
    return $result;
}


echo affichageFormulaire($nomsInput, $sexe, $elements);
