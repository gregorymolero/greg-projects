<?php
include ('fonctions_1.php');
?>
<html>
    <head><title>Abonne-toi</title></head>
    <body>
        <h2>Pour vous abonner, completez les informations demandées.</h2>
        <form name="inscription" method="post" action="abonnement.php">
            Mr<input type="radio" name="mr&mrs" value="Mr"/> Mme<input type="radio" name="mr&mrs" value="Mme"/> Mlle<input type="radio" name="mr&mrs" value="Mlle"/><br/>
            Nom:<input type="text" name="nom"/><br/>
            Prénom:<input type="text" name= "prénom"/><br/>
            Age:<input type="text" name="age"/><br/>
            Adresse:<input type="text" name="adresse"/><br/>
            Code postal:<input type="text" name="codepostal" maxlength="5" size="5"/><br/>
            Ville: <input type="text" name="ville"/><br/>
            N° de Tel:<input type="text" name="numerotel" maxlength="10" size="10"/><br/>
            <h4>Veuillez choisir votre magazine:</h4><br/>
            <input type="radio" name="mag" value="mainverte"/>-J'ai la main verte.<br/>
            <input type="radio" name="mag" value="piedmarin"/>-J'ai le pied marin.<br/>
            <input type="radio" name="mag" value="oeilvif"/>-J'ai l'oeil vif.<br/>
            <input type="radio" name="mag" value="ratedilate"/>-J'ai la rate qui se dilate.<br/>
            <input type="submit" name="OK" value="Accepter"/>
        </form>
    <?php
    if (isset ($_POST['OK'])){
        $mrmrs=$_POST['mr&mrs'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prénom'];
        $age=$_POST['age'];
        $adresse=$_POST['adresse'];
        $codepostal=$_POST['codepostal'];
        $ville=$_POST['ville'];
        $numerotel=$_POST['numerotel'];
        $mag=$_POST['mag'];
        connectabonnement();
        $sql='INSERT INTO abonnements VALUES ("","'.$mrmrs.'","'.$nom.'","'.$prenom.'","'.$age.'","'.$adresse.'","'.$codepostal.'","'.$ville.'","'.$numerotel.'","'.$mag.'")';
        mysql_query ($sql) or die('Erreur SQL!'.$sql.'<br/>'.mysql_error());
        mysql_close ();
        echo'vous etes sur que vous etes :'.$mrmrs.' '.$nom.' '.$prenom.'<br/>
        domicilié au :'.$adresse.' '.$codepostal.' dans la ville de '.$ville.'?<br/>
        Vous avez choisi de vous abonner à '.$mag.'.';
    }
    ?>
    </body>
</html>