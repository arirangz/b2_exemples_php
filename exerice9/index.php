<?php
try {
    $pdo = new PDO("mysql:dbname=exercice9;host=localhost;charset=utf8mb4", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_GET['action']) && isset($_GET['id'])) {
    if ($_GET["action"] === "delete") {
        //Gestion de la suppression
        $query = $pdo->prepare("DELETE FROM post WHERE id = :id");
        $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $query->execute();
    }
}

if (isset($_POST['title']) && isset($_POST['description'])) {

    $postDate = date("Y-m-d H:i:s");

    // Insertion en base de données
    $query = $pdo->prepare("INSERT INTO post (title, description, date) VALUES (:title, :description, :date)");
    $query->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $query->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $query->bindValue(':date', $postDate, PDO::PARAM_STR);

    $query->execute();
}

//On récupère tous les articles
$query = $pdo->prepare("SELECT id, title, description FROM post");
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Liste des articles</h1>


    <?php foreach ($articles as $article) { ?>

        <h2><?= htmlspecialchars($article["title"]) ?> <a href="index.php?id=<?= htmlspecialchars($article["id"]) ?>&action=delete">Supprimer</a></h2>
        <p><?= htmlspecialchars($article["description"]) ?></p>
    <?php } ?>

    <form action="" method="post">
        <h2>Ajouter un article</h2>
        <p>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" value="Enregistrer" name="ajout_article">
        </p>
    </form>
</body>

</html>