<h1>Exercice 11</h1>

<?php

$tableau = ["Peugeot", "Renault", "BMW", "Mercedes",];

echo "<ul>";
for($i = 0; $i < count($tableau); $i++){
    echo "<li>$tableau[$i]</li>"; 
}
echo "</ul>";

echo "<ul>";
foreach ($tableau as $marque) {
    echo "<li>$marque</li>"; 
    
}
echo "</ul>";