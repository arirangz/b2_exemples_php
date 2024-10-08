<?php

$annees = [2022, 2023, 2024];

$notes = [15.5, 16.5, 14];

$fruits = ["pomme", "cerise", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit."<br>";
}

$tableau_france = ["nom" => "France", "capital" => "Paris", "population" => 67.6];

//echo $tableau_france["nom"]." ".$tableau_france["capital"];


$utilisateurs = [
    ["first_name" => "John", "last_name" => "Doe", "email" => "john@gmail.com"],
    ["first_name" => "Jane", "last_name" => "Doe", "email" => "jane@gmail.com"],
    ["first_name" => "Jack", "last_name" => "Doe", "email" => "jack@gmail.com"],
    
];

foreach ($utilisateurs as $utilisateur) {
    echo $utilisateur["first_name"]." ".$utilisateur["last_name"]."<br>";
}


?>