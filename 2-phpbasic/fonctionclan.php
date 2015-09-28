<?php
function connectclan () {
    $base=mysql_connect ('localhost','root','');
    mysql_select_db ('clan',$base);
}
function affichage_texte ($taille, $couleur, $texte) {
	echo '<font size = "'.$taille.'" color = "'.$couleur.'">'.$texte.'</font>';
}
?>