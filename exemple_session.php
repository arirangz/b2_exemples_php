<?php
session_start();

// Stock une information en session
//$_SESSION['email'] = 'test@test.com';
//$_SESSION['username'] = 'John';

//Prévient les attaques de fixation de session
session_regenerate_id(true);
//Supprime les données de session du serveur
session_destroy();
//Supprime les données du tableau $_SESSION
unset($_SESSION);


var_dump($_SESSION);