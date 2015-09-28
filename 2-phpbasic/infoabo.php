<?
include ('fonctions1.php');
?>
<html>
    <head><title>Administration du site</title></head>
    <body>
        <h1 align=center><font face=sans-serif><u>Bienvenue à l'Admin du site</u></font></h1>
         <form method="post" action="infoabo.php">
            Vous souhaitez voir :
            <select name="champ">
                <?
                connectabonnement();
                $sql='show fields from utilisateurs';
                $req=mysql_query($sql) or die ('Erreur SQL!<br/>'.$sql.'<br/>'.mysql_error());
                while($data=mysql_fetch_array($req)){
                    echo'<option name="'.$data['Field'].'">'.$data['Field'].'</option>';
                }
                mysql_free_result($req);
                ?>
            </select>
            <input type="submit" name="Valider" value="OK"/>
        </form>
    </body>
</html>
