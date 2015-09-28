<?php
include("fonctions.php");
?>
<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <head><title>ADMINISTRATION DU SITE</title></head>
    <body>
        <h2>Choisissez le champ qui vous intéresse et entrez manuellement un critère</h2>
        <h4>Une absence de critères vous montre toutes les données du champ</h4>
        <!--
            Commentaires HTML
            On construit une liste déroulante ( un select et plusieurs options)
            Chaque option sera remplie par une donnée SQL récupérée par notre requête PHP
        -->
        <form method="post" action="admin.php">
            <select name="champ">
                <?php
                //On se connecte
                connectmabase();
                //On prépare la requête SQL qui récupère les champs
                $sql = 'Show fields from utilisateurs';
                /* On lance la requête (mysql_query) 
                et on impose un message d'erreur si la requête ne passe pas (or die) */ 
                $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
                //On scanne le résultat et on construit chaque option avec
                while($data = mysql_fetch_array($req)){
                    // on affiche chaque champ
                    echo '<option name="'.$data['Field'].'">'.$data['Field'].'</option>';
                }
                //On libère mysql de cette première requête
                mysql_free_result ($req); 
                //On ferme le select
                ?>
            </select>
            Entrez votre critère de sélection sur ce champ : <input type="text" name="critere"/>
            <input type="submit" name="Valider" value="OK"/>
        </form>
        <!--
            On ferme le formulaire
        -->
        <?php
        //On traite le formulaire
        if(isset($_POST['Valider'])){
            $champ=$_POST['champ'];
            $critere=$_POST['critere'];
 
            // On prépare la requête 
            //requête différente selon qu'on veut tout le champ
            //ou un champ avec une condition
            if(($critere=='')||($critere==NULL)){
                $sql='SELECT '.$champ.' FROM utilisateurs';
            }
            else{
                $sql = 'SELECT * FROM utilisateurs WHERE '.$champ.'="'.$critere.'"'; 
            }
            /* On lance la requête (mysql_query) 
            et on impose un message d'erreur si la requête ne passe pas (or die)*/ 
            $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
 
            //Affichage du résultat
            echo'<h2>Résultat</h2>';
 
            //On scanne chaque résultat et affiche
            while($data = mysql_fetch_array($req)){
                /* on affiche les résultats 
                C'est pas très propre mais la fonction print_r vous permet de tout voir sur votre objet tableau :
                Quand vous êtes complètement perdu sur ce que votre tableau est censé comporter :
                Tapez cette commande print_r($tableau), 
                vous retrouverez facilement la structure du tableau (index et valeurs)*/
 
                print_r($data);
                echo'<br/>';
            }
            //On libère la mémoire mobilisée pour cette seconde requête dans SQL
            mysql_free_result ($req);  
 
            //On ferme sql
            mysql_close ();  
        }
        ?>
    </body>
</html>
