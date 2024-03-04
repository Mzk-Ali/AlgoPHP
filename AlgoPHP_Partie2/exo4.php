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
    $result = "<table>
                    <thead><tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien Wiki</th>
                    </tr></thead>
                    <tbody>";
    foreach($tab as $pays => $capitale){
        $texte_maj = mb_strtoupper($pays);
        $result .=      "<tr>
                            <td> $texte_maj </td>
                            <td> $capitale </td>
                            <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'> Lien </a></td>
                        </tr>";
    }
    $result .=      "</tbody>
                </table>";

    return $result;
}

echo afficherTableHTML($capitales);

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
