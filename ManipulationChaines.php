<?php
// Concaténation de chaînes
$nom = "Ahmed";
$prenom = "Sidi";
$nomComplet = $prenom . " " . $nom; // $nomComplet contient "Ahmed Sidi"

// Longueur d'une chaîne
$phrase = "Ceci est une phrase.";
$longueur = strlen($phrase); // $longueur contient la longueur de la phrase

// Rechercher et remplacer dans une chaîne
$chaine = "Le chat est sur le tapis.";
$nouvelleChaine = str_replace("chat", "chien", $chaine); // Remplace "chat" par "chien"

// Découper une chaîne en tableau
$chaine = "rouge,vert,bleu";
$tableauCouleurs = explode(",", $chaine); // $tableauCouleurs est un tableau ["rouge", "vert", "bleu"]

// Convertir en majuscules ou minuscules
$texte = "Ceci est un Exemple";
$texteEnMajuscules = strtoupper($texte); // Convertit en majuscules
$texteEnMinuscules = strtolower($texte); // Convertit en minuscules

?>