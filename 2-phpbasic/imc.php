<html>
    <head>
        <title>Indice de masse corporelle</title>
    </head>
    <body>
        <h1>Calculez votre indice de masse corporelle</h1>
        <form name="inscription" method="post" action="imc.php">
        Entrez vorte prénom: <input type="text" name="prénom"><br>
        Entrez votre taille: <input type="float" name="taille"><br>
        Entrez votre poids: <input type="float" name="poids"/><br>
        <input type="submit" name="valid" value="Calculer"/>
        </form>
    </body>
</html>
<?php
if (isset($_POST['valid'])) {
    $prénom=$_POST['prénom'];
    $taille=$_POST[taille];
    $poids=$_POST['poids'];
}
$imc=$poids/($taille*$taille)
if ($imc<16.5){
    $verdict='vous etes en dénutrition';
}
else {
    $verdict='ca va pour vous';
}
echo $verdict
?>