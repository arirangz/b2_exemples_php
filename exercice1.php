<?php
    // Gérer les variables
    $user_name = "John";
    $age = 21;
    $message = "";
    if ($age >= 18) {
        $message = "Bienvenue sur notre jeu $user_name";
    } else {
        $message = "Notre jeu est accessible aux personnes de plus de 18 ans";
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
    <p><?=$message ?></p>

</body>
</html>