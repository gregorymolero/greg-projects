<?php
$salaire=2000;
$domaine='informatique';
$informatique=true;
$note=11.5;
echo '<h1>Bonjour</h1>';
echo '<p>Le salaire auquel j\'aspire: <b>'.$salaire.'</b>€<br>
la branche dans laquelle je travaille ou souhaiterais travailler: <b>'.$domaine.'</b><br>
Pour preciser: ';
if ($informatique==true){
    echo'<b>je travaille actuellement dans l\'informatique</b><br>';    
}
else {
    echo '<b>je ne travaille pas dans l\'informatique</b><br>';    
}
echo'La note moyenne que j\'ai obtenue au bac: <b>'.$note.'</b></p>';
?>