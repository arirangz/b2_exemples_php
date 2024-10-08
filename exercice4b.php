<?php


function surface(float $longueur, float $largeur, string $nomPiece, bool $afficherM2):string
{   
    $calculeSurface = $longueur * $largeur;

    $valeurDeRetour = $nomPiece .": ".$calculeSurface;
    
    if ($afficherM2) {
        $valeurDeRetour = $valeurDeRetour . "m²";
        //$valeurDeRetour .= "m²";
    }

    return $valeurDeRetour;

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
    <p><?=surface(3, 4, "Chambre", true) ?></p>
    <p><?=surface(4, 4, "Salon", false) ?></p>
    <p><?=surface(4, 4, "Cuisine", true) ?></p>
    <p><?=surface(3, 2, "Salle de bain", false) ?></p>

</body>
</html>