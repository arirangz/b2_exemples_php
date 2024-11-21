<?php


try {
    $pdo = new PDO("mysql:dbname=keyce_b2_reseau_social;host=localhost;charset=utf8mb4", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// On récupère un seul utilisateur à partir de l'id présent dans l'url
$id = (int)$_GET['id'];
$query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
//fetch() nous permet de récupérer une seule ligne
$result = $query->fetch(PDO::FETCH_ASSOC);

//echo $result["email"];


//On récupère tous les utilisateurs
$query = $pdo->prepare("SELECT * FROM user");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo htmlspecialchars($user["nickname"])  . "<br>";
}
