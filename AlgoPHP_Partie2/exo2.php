<h1>Exercice 2</h1>

<?php

$capitales = [  "France"    =>"Paris",
                "Allemagne" =>"Berlin",
                "USA"       =>"Washington",
                "Italie"    =>"Rome"
];

function afficherTableHTML(array $tab){
    ksort($tab);
    $result = "<table>
                    <thead><tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                    </tr></thead>
                    <tbody>";
    foreach($tab as $pays => $capitale){
        $texte_maj = mb_strtoupper($pays);
        $result .= "    <tr>
                            <td> $texte_maj </td>
                            <td> $capitale </td>
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