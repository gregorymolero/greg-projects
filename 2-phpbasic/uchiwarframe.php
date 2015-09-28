<?php
include ('fonctionclan.php');
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>UCHIWARFRAME.COM</title>
        <style>
            body {
                    border: 5px;
                    border-style:groove;
                    background-image: url("warframe.jpg");
                    background-repeat:no-repeat;
                    background-size:100% 100%;
                    font-family:impact;
                    color:rgb(100,20,20);
                    overflow:hidden;
            }
            h1{
                text-align:center;
                text-transform:uppercase;
                background-image:url("sharingan.png");
                background-repeat:no-repeat;
                background-size: 100% 100%;
                padding:100px;
            }
            table{
                border-collapse:collapse
                padding: 100px
            }
        </style>
    </head>
    <body>
        <h1>Bienvenue sur la page du clan UCHIWA</h1>
            <?php
            $date = date ("d-m-Y");
            $heure = date ("H:i");
            echo 'Nous sommes le : ';
            echo $date;
            echo ' Et il est : '.$heure.'<br/>';
            $open_compteur = fopen ("compteur.txt", "r+");
            $nb_visites = fgets ($open_compteur, 12);
            $nb_visites = $nb_visites + 1;
            fseek ($open_compteur, 0);
            fputs ($open_compteur, $nb_visites);
            fclose ($open_compteur);
            echo $nb_visites.'eme visiteur !';
            ?>
        <table width=100%>
            <tr>
                <td align=left margin left=10px>
                <h2>Inscrivez vous</h2>
                <form name=inscription method=post action="uchiwarframe.php">
                Pseudo IG:<input type="text" name="pseudo"/><br/>
                Password:<input type="password" name="pwd"/><br/>
                <input type="submit" name="accept" value="Bienvenue"/><br/>
                </form>
                </td>
                <td align=right>
                <h2>Déja membres</h2>
                <form name=inscription method=post action="uchiwarframe.php">
                <input type="text" name="pseudo"/>:Pseudo IG<br/>
                <input type="password" name="pwd"/>:Password<br/>
                <input type="submit" name="OK" value="OK"/><br/>
                </form>
                </td>
            </tr>       
        </table>
        <?php
        if(isset ($_POST['accept'])){
            $pseudo=$_POST['pseudo'];
            $pwd=$_POST['pwd'];
            connectclan ();
            $sql='INSERT INTO clan VALUES("","'.$pseudo.'","'.$pwd.'")';
            mysql_query ($sql) or die('Erreur SQL!'.$sql.'<br/>'.mysql_error());
            mysql_close ();
        }
        if (isset ($_POST['OK'])){
            $pseudo=$_POST['pseudo'];
            $pwd=$_POST['pwd'];}
            connectclan();
            /*j'ai réecris cette ligne apres "clan"
            $sql='SELECT pseudo, pwd FROM clan WHERE pseudo=='.$pseudo.'AND pwd=='.$pwd.'';
            /*et j ai pas touché le reste 
            $req= mysql_query($sql) or die('Erreur SQL ! <br/>'.musql-error());
            $data=mysql_fetch_array($req);
            mysql_free_result($req);
            mysql_close();
        if($data['pseudo']==$pseudo && ($data['pwd']==$pwd){
        echo'super';
        }*/
        ?>
    </body>
</html>