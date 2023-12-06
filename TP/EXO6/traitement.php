<?php
if(empty($_GET['name']))
    echo 'la varibale est null :'.'<br>';
else 
    echo "Le vatiable n'est pas nulle est sa valeurs =".$_GET['name'].'<br>';

    echo 'Hi '.$_GET['name'].', '.$_GET['location'].' is a cool place'.'<br>';
    
    var_dump($_GET);
    echo '<br>';
    echo "la taille du tableau est : ".count($_GET);
    echo '<br>';
    $_GETT=null;
    if(is_array($_GET))
        echo "\$_GET  _ Est un tableaux associatif";
    else
        echo "n'est pas un tableaux associatif";
    
    echo '<br>';

    $objet = new stdClass();
    if (is_object($objet)) {
        echo "\$objet  _ Est un objet";
        echo '<br>';
    }
    else {
        echo "\$objet  _ n'Est pas un objet";
    }
?>