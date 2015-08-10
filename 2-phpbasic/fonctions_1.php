<?php
function connectabonnement () {
    $base=mysql_connect ('localhost','root','');
    mysql_select_db ('abonnement',$base);
}
?>