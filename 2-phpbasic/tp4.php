<html>
    <head><title>TP4</title></head>
    <body>
        <h1>Bonjour et bienvenue</h1>
        <h2>Entrez les données suivantes </h2>
        <form name="formulaire" method="post" action="tp4.php">
            Entrez votre nom : <input type="text" name="nom" /> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/> <br/>
            Entrez votre âge : <input type="text" name="age"/> <br/>
            Entrez votre ville  : <input type="text" name="ville"/> <br/>
            <input type="submit" name="valider" value="Accepter"/>
        </form>
        <?php
        if (isset ($_POST ['valider'])){
            $nom=$_POST['nom'];
            $prenom=$_POST ['prenom'];
            $age=$_POST['age'];
            $ville=$_POST['ville'];
            $adresse=array ($nom,$prenom,$age,$ville);
            echo 'Vous avez saisi <br/>';
            foreach ($adresse as $composantes){              
              echo'  - '.$composantes.'<br/>';
            }
        }     
        ?>
    </body>
</html>
