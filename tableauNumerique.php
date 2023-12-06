<?php

// Création d'un tableau numérique
$fruits = array("Pomme", "Banane", "Orange", "Fraise");

// Accès à un élément du tableau
echo $fruits[0]; // Affiche "Pomme"

// Modification d'un élément du tableau
$fruits[1] = "Kiwi";

// Ajout d'un élément à la fin du tableau
$fruits[] = "Ananas";

// Parcours d'un tableau
foreach ($fruits as $fruit)
    echo $fruit."<br>";

echo count($fruits)."<br>";

for ($i=0; $i < count($fruits); $i++) { 
    echo $fruits[$i]."<br>";
}

?>