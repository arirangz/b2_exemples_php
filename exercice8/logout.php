<?php

session_start();
//Prévient les attaques de fixation de session
session_regenerate_id(true);
//Supprime les données de session du serveur
session_destroy();
//Supprime les données du tableau $_SESSION
unset($_SESSION);

header('Location: index.php');