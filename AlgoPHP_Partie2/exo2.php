<h1>Exercice 2</h1>

<?php

$capitales = array(
                    "France"    =>"Paris",
                    "Allemagne" =>"Berlin",
                    "USA"       =>"Washington",
                    "Italie"    =>"Rome"
                    );


function afficherTableHTML(array $tab){
    //$texte_maj = strtoupper($tab);
    ksort($tab);
    //echo $texte_maj;
    echo "<table border-collapse: 'collapse'><thead><tr>";
    echo "<th>Pays</th>";
    echo "<th>Capitale</th>";
    echo "</tr></thead></table>";
    echo "<tbody>";
    foreach($tab as $pays => $capitale){
        $texte_maj = strtoupper($pays);
        echo "<tr>";
        echo "<td> $texte_maj </td>";
        echo "<td> $capitale </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

}

afficherTableHTML($capitales);