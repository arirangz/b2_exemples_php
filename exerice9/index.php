<?php

require_once "libs/pdo.php";
require_once "libs/article.php";




if (isset($_GET['action']) && isset($_GET['id'])) {
    if ($_GET["action"] === "delete") {
        deleteArticleById($pdo, $_GET['id']);
    }
    if ($_GET["action"] === "modify") {
        $articleModif = getArticleById($pdo, $_GET['id']);
    }
}

if (isset($_POST['title']) && isset($_POST['description'])) {
    // On teste la présence de l'id dans $_POST pour savoir si on fait une modification ou ajout
    if (isset($_POST["id"])) {
        updateArticle($pdo, $_POST["id"], $_POST['title'],  $_POST['description']);
        // On redirige vers l'index pour ne plus avoir de param d'url
        header("Location: index.php");
    } else {
        createArticle($pdo, $_POST['title'], $_POST['description']);
    }
}

//On récupère tous les articles
$articles = getArticles($pdo);
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

        <h2><?= htmlspecialchars($article["title"]) ?> <a href="index.php?id=<?= htmlspecialchars($article["id"]) ?>&action=modify">Modifier</a> <a href="index.php?id=<?= htmlspecialchars($article["id"]) ?>&action=delete">Supprimer</a></h2>
        <p><?= htmlspecialchars($article["description"]) ?></p>
    <?php } ?>


    <form action="" method="post">

        <?php if (isset($_GET['action']) && $_GET['action'] === "modify") {
            $formTitle = "Modifier un article";
        } else {
            $formTitle = "Ajouter un article";
        } ?>
        <h2><?= $formTitle ?></h2>

        <?php if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === "modify") { ?>
            <input type="hidden" name="id" value="<?= htmlspecialchars($_GET["id"]) ?>">
        <?php } ?>
        <p>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="<?php if (isset($articleModif["title"])) {
                                                                    echo htmlspecialchars($articleModif["title"]);
                                                                } ?>">
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"><?php if (isset($articleModif["description"])) {
                                                                                    echo htmlspecialchars($articleModif["description"]);
                                                                                } ?></textarea>
        </p>
        <p>
            <input type="submit" value="Enregistrer" name="ajout_article">
        </p>
    </form>
</body>

</html>