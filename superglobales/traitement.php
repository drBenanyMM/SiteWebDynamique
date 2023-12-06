<?php
// Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère et affiche les données du formulaire
        echo "<table>";
        echo "<tr><th>Champ</th><th>Valeur</th></tr>";

        foreach ($_POST as $champ => $valeur) {
            echo "<tr><td>$champ</td><td>$valeur</td></tr>";
        }

        echo "</table>";
    } else {
        // Si le formulaire n'a pas été soumis, affiche un message
        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>