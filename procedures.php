<?php
// Procédure qui affiche un message personnalisé
function afficherMessage($prenom, $nom) {
    echo "Bonjour, " . $prenom . " " . $nom . " !";
}

afficherMessage("Ahmed", "Sidi"); // Appel de la procédure
// Affiche "Bonjour, Ahmed Sidi !"
?>
