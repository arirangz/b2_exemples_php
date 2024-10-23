<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accès au jeu</h1>
    <?php 
        if (isset($_POST['age'])) {
            $age = $_POST['age'];
            $name = htmlspecialchars($_POST['name']);
            if ($age >= 18) {
            ?>
                <strong><?="Bienvenue $name" ?></strong>
            <?php
            } else {
                echo "Vous n'êtes pas autorisé à jouer à ce jeux";
            }
        } else {
            echo 'Attention vous devez vous connecter à partir du formulaire';
        }
    ?>

</body>
</html>