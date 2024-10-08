<?php

$user = ["first_name" => "John", "last_name" => "Doe", "email" => "john@gmail.com"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Prénom: <?=$user["first_name"] ?> </p>
    <p>Nom: <?=$user["last_name"] ?> </p>
    <p>Email: <?=$user["email"] ?> </p>
</body>
</html>