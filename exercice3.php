<?php
    $films = [
        ["title" => "The Matrix", "year" => 1999],
        ["title" => "The Matrix Reloaded", "year" => 2003],
        ["title" => "The Matrix Revolutions", "year" => 2003],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($films as $film) {  ?>
        <section>
            <h2>Titre: <?= $film["title"] ?></h2>
            <p>Année: <?= $film["year"] ?></p>
        </section>
    <?php } ?>
</body>
</html>