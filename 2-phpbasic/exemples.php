<?php
/** PUTAIN DE SUPER IMPORTANT,ON TOUCHE PAS CETTE LIGNE */
include_once('config.php');
/**-----------------------------------------------------*/

/** VARIABLES */
$variable = 0; //Integer
$variable = 0.505; //Float
$variable = "bonjour"; //String
$variable = false; //Booléen
$variable = array("poulet","saucc","ketchup","coca"); //array

/** CONDITIONS */

    /** SI */
    if($variable == true){
        echo "Hey, je suis true !";
    }else{
        echo "Hey, je suis false!";
    }
    
    /** FOREACH */
    //Pour un tableau, parcours ligne par ligne, et assigne la valeur a la variable "$ingredient"
    foreach($variable as $ingredient){
        echo "Va chercher ".$ingredient."<br>";
    }

/** SCRIPTS */
    echo $variable; //Afficher le contenu de la variable
   fb("Debut du script"); //Afficher dans firebug

?>