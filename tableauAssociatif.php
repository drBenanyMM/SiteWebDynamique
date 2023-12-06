<?php
// Création d'un tableau associatif
$personne = array("nom" => "Ahmed", "prénom" => "Sidi", "âge" => 30);

// Accès à un élément du tableau
echo $personne["nom"]; // Affiche "Ahmed "

// Modification d'un élément du tableau
$personne["âge"] = 35;

// Ajout d'une nouvelle paire clé-valeur
$personne["Email"] = "benany@mail.com";

// Parcours d'un tableau associatif
foreach ($personne as $cle => $valeur) {
    echo $cle . ": " . $valeur . "<br>";
}

echo count($personne)."<br>";

?>