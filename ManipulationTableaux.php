<?php
// Compter les éléments dans un tableau
$nbFruits = count($fruits); // $nbFruits contient le nombre d'éléments (4)
    echo $nbFruits;

// Vérifier si un élément existe dans un tableau
if (in_array("Banane", $fruits)) {
    echo "Banane est dans le tableau.";
}

// Supprimer un élément du tableau
unset($fruits[1]); // Supprime "Banane" du tableau
?>