<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        if (isset($_POST['email'])) {
            echo htmlspecialchars($_POST['email']);
        } 
    ?>

    <form action="" method="post">
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </p>

        <input type="submit" value="Connexion">

    </form>

</body>

</html>