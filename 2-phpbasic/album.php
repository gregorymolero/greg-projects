<?php
/** PUTAIN DE SUPER IMPORTANT,ON TOUCHE PAS CETTE LIGNE */
include_once('config.php');
/**-----------------------------------------------------*/
//var_dump($_GET);

$artiste = $_GET["artiste"];

/*if($artiste == "metallica"){
    include("black_album.html");
}elseif($artiste == "redhot"){
    include("blood_sugar_sex_magic.html");
}else{
    echo "Fuuuuuuuuu";
}*/

switch($artiste){
    
    case 'metallica':
        include("black_album.html");
        break;
    
    case 'redhot':
        include("blood_sugar_sex_magic.html");
        break;
    
    default:
        echo "Artiste ".$artiste." inconnu";
        break;
    
}

include("/".$artiste."/");
?>