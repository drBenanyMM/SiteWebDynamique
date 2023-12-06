<?php
    echo "Bonjour<br>Tu as cliqué sur le bouton envoyer<br>";

    echo "Information dans un tableaux associatif personne.<br>";

    // Création d'un tableau associatif personne
$personne = array("nom" => "Ahmed", "prénom" => "Sidi", "âge" => 30);

// Ajout d'une nouvelle paire clé-valeur
$personne["Email"] = "benany@gmail.com";

// Parcours d'un tableau associatif
foreach ($personne as $cle => $valeur) {
    echo $cle . ": " . $valeur . "<br>";
}

echo "la taille du tableaux est: ".count($personne).".<br>";

echo "Utilisation de la fonction print_r().<br>";
    print_r($personne);
    echo "<br>";

echo "Utilisation de la fonction var_dump().<br>";
    var_dump($personne);
?>