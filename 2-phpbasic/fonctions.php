<?php
function connectmabase(){
    $base = mysql_connect ('localhost', 'root', '');  
    mysql_select_db ('mabase', $base) ;
}
?>
