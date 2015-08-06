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
<?php
if (isset($_POST['valid'])) {
    $prénom=$_POST['prénom'];
    $taille=$_POST['taille'];
    $poids=$_POST['poids'];
}
$imc=$poids /($taille*$taille);
echo 'Bonjour '.$prénom.'votre IMC est de : '.$imc.'.<br>';
if ($imc<16.5){
    $verdict='Vous etes en dénutrition.';
}
elseif ($imc<18.5) {
    $verdict='Vous etes maigre.';
}
elseif ($imc<25){
    $verdict='Vous etes de corpulence normale.';
}
elseif ($imc<30){
    $verdict='Vous etes en surpoids.';
}
elseif ($imc<35){
    $verdict='Vous êtes modérement obèse.';
}
elseif ($imc<40){
    $verdict='Vous soufferez d\'obésité sévère.';
}
else {
    $verdict='Vous souferez d\'obésité morbide.';
}
echo $verdict;
?>
    </body>
</html>