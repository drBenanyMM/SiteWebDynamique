<?php
// Lire un fichier
$contenu = file_get_contents("monfichier.txt");
//echo $contenu;

// Écrire dans un fichier
$donnees = "Données à écrire dans le fichier";
#file_put_contents("monfichier.txt", $donnees);

$contenu = file_get_contents("monfichier.txt");
//echo $contenu."<br>";

// Ouvrir un fichier en mode lecture
$handle = fopen("monfichier.txt", "r");
if ($handle) {
    while (($ligne = fgets($handle)) !== false) {
    echo $ligne."<br>";
}
fclose($handle);
}
// Ajouter du contenu à un fichier
$ajout = "Nouvelles données à ajouter";
//file_put_contents("monfichier.txt", $ajout, FILE_APPEND);

// Supprimer un fichier
//unlink("monfichier.txt");

?>
