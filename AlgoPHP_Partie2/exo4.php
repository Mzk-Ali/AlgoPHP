<h1>Exercice 4</h1>

<?php

$capitales = [  "France"    =>"Paris",
                "Allemagne" =>"Berlin",
                "USA"       =>"Washington",
                "Italie"    =>"Rome",
                "Espagne"   =>"Madrid"
];

function afficherTableHTML(array $tab){
    asort($tab);
    echo "<table><thead><tr>";
    echo "<th>Pays</th>";
    echo "<th>Capitale</th>";
    echo "<th>Lien Wiki</th>";
    echo "</tr></thead>";
    echo "<tbody>";
    foreach($tab as $pays => $capitale){
        $texte_maj = strtoupper($pays);
        echo "<tr>";
        echo "<td> $texte_maj </td>";
        echo "<td> $capitale </td>";
        echo "<td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'> Lien </a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

}

afficherTableHTML($capitales);

?>








<style type="text/css">
table{
    border-collapse: collapse;
}

td, th{
    border: 1px solid black;
    padding : 0px 5px;
}
</style>
