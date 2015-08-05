<html>
    <head><title>Ma page d'accueil</title></head>
    <body>
        <h1>Bienvenue sur le site de Greg </h1>
        <h2>Commencez-donc par vous inscrire :</h2>
        <form name="inscription" method="post" action="saisie.php">
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prénom"/><br/>
            <input type="submit" name="valider" value="J'accepte"/>
        </form>
    </body>
</html>
<?php
if(isset($_POST['valider'])){
    $pseudo=$_POST['nom'];
    $prénom=$_POST['prénom'];
    echo 'Salut '. $pseudo.' '. $prénom.'<br/>Bienvenue sur mon site !';
}
?>