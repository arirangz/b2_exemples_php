<?php

function surface(float $longueur, float $largeur):float
{
    return $longueur * $largeur;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcul des surfaces</h1>
    <p>Chambre: <?=surface(3, 4) ?>m²</p>
    <p>Salon: <?=surface(5, 3) ?>m²</p>
    <p>Cuisine: <?=surface(4, 3) ?>m²</p>
</body>
</html>