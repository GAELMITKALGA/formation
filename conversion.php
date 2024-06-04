<?php

function convertdollarsfrancs($taux, $montant){
    $result= $taux * $montant;
    return $result;
}

function convertfrancsdollars($taux, $montant) {
    $result= $montant/ $taux;
    return $result;
}

$taux = $_POST["taux"] ?? null;
$montant= $_POST["montant"] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taux de change</title>
</head>
<body>
    <h1>Conversion de dollars en franc</h1>
    <form action=""methode="post">
        <input typt= "number" name="taux" placeholder= "inserez la valeur 1$ en franc" required>
        <input type="text" name="taux" placeholder="entrez le montant en franc" required>   
        <button type="submit">Convertir</button>
    </form>

    <p>votre argent en franc est de :<?= convertdollarsfrancs($taux, $montant) ?> FC</p>

    <h1>Conversion de franc en dollars</h1>
    <form action= "" method="post">
        <input type="number" name="montant" placeholder= "inserez le montant en franc " required>
        <input type="number" name="taux" placeholder= "inserez le taux en dollar" required>
        <button type="submit">Convertir</button>
    </form>

    <p> votre montant en dollar est de :<?= $taux == 0 ? "division by zero" : number_format(convertfrancsdollars($taux, $montant),1) ?>  </p>

</body>
</html>