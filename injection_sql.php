<?php
//;DELETE FROM user;
$pdo = new PDO('mysql:dbname=keyce_b2_reseau_social;host=localhost;charset=utf8mb4', 'root', '');
$id = $_GET['id'];

var_dump($id);
$query = $pdo->query("SELECT * FROM user WHERE id = $id");
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
