<?php
    print_r($_GET);
   //var_dump($_GET);
   //echo count($_REQUEST);
   //echo ($_SERVER["REQUEST_METHOD"])."<br>";
   //echo ($_SERVER["REQUEST_URI"]);
   $nom = $_GET["nom"];
if (empty($nom)) {
    echo "vous n'avez pas saisi un nom".$nom;
}   
else {
    echo "le nom saisi est ".$nom;
}
?>