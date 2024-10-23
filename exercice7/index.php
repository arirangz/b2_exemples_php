<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="check_age.php" method="post">
        <p>
            <label for="age">age</label>
            <input type="number" name="age" id="age">
        </p>
        <p>
            <label for="name">Nom</label>
            <input type="text" name="name" id="nom">
        </p>
        <input type="submit" value="Envoyer" name="subscription_form">
    </form>
</body>
</html>