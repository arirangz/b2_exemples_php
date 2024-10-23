<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST["login_form"])) {
        if ($_POST["username"] === "admin" && $_POST["password"] === "XD2Ka@") {

            session_regenerate_id(true);
            $_SESSION["username"] = $_POST["username"];
        } else {
            echo "username ou mot de passe incorrecte";
        }
    }
    ?>

    <header>
        <?php if (isset($_SESSION["username"])) { ?>
            Bonjour <?= htmlspecialchars($_SESSION["username"]) ?>
            <a href="logout.php">Se déconnecter</a>
        <?php } ?>
    </header>





    <?php if (!isset($_SESSION['username'])) { ?>
        <h1>Connexion</h1>
        <form action="" method="post">
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </p>
            <input type="submit" value="Login" name="login_form">
        </form>
    <?php } elseif (isset($_SESSION['username'])) { ?>
        <h1>Mon profil</h1>
        <p>Username: <?= $_SESSION['username']; ?></p>
    <?php } ?>
</body>

</html>