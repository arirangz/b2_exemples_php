<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte</title>
</head>

<body>
    <h1>Carte</h1>
    <?php if (isset($_GET['expediteur']) && isset($_GET['destinataire']) && isset($_GET['message'])) {
        $expediteur = htmlspecialchars($_GET['expediteur']);
        $destinataire = htmlspecialchars($_GET['destinataire']);
        $message = htmlspecialchars($_GET['message']);
    ?>
        <p>Bonne année <?= $destinataire ?> de la part de <?= $expediteur ?></p>
        <p><?= $message ?></p>
    <?php
    } else {
    ?>
        <p>Veuillez saisir tous les champs</p>
    <?php

    }
    ?>
</body>

</html>