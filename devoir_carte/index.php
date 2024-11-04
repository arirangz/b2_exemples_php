<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte</title>
</head>

<body>
    <form action="card.php" method="get">
        <p>
            <label for="expediteur">Expéditeur</label>
            <input type="text" name="expediteur" id="expediteur">
        </p>
        <p>
            <label for="destinataire">Destinataire</label>
            <input type="text" name="destinataire" id="destinataire">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
        </p>
        <input type="submit" value="Envoyer" name="send_card">
    </form>
</body>

</html>