<?php

function getArticles(PDO $pdo): array
{
    //On récupère tous les articles
    $query = $pdo->prepare("SELECT id, title, description FROM post");
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}

function getArticleById(PDO $pdo, int $id): array
{
    //On récupère tous les articles
    $query = $pdo->prepare("SELECT id, title, description FROM post WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}

function deleteArticleById(PDO $pdo, int $id): bool
{
    //Gestion de la suppression
    $query = $pdo->prepare("DELETE FROM post WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    return $query->execute();
}

function createArticle(PDO $pdo, string $title, string $description): bool
{
    $postDate = date("Y-m-d H:i:s");

    // Insertion en base de données
    $query = $pdo->prepare("INSERT INTO post (title, description, date) VALUES (:title, :description, :date)");
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':date', $postDate, PDO::PARAM_STR);

    return $query->execute();
}

function updateArticle(PDO $pdo, int $id, string $title, string $description): bool
{
    $query = $pdo->prepare("UPDATE post SET title = :title, description = :description WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    return $query->execute();
}
